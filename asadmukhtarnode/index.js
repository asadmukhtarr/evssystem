const express = require('express');
const { MongoClient,ObjectId } = require('mongodb');
const multer = require('multer');
const cors = require('cors');
const bodyParser = require('body-parser');
const path = require('path');
const app = express();
const port = 3030;
app.use(cors()); // Allow all origins
const url = "mongodb://localhost:27017";
const client = new MongoClient(url);
const dbName = "zainab";
let db;

// Connect to MongoDB
async function mongodb_connection() {
    try {
        const client = await MongoClient.connect(url, {
            useNewUrlParser: true,
            useUnifiedTopology: true
        });
        db = client.db(dbName);
        console.log("✅ Database Connected Successfully - Asad");
    } catch (error) {
        console.error("❌ Can't connect with DB", error);
    }
}
mongodb_connection();

app.set('view engine','ejs');
app.set('views', path.join(__dirname, 'views'));
app.use(express.static(path.join(__dirname, 'public'))); // this is for file handling ...
app.use(bodyParser.urlencoded({ extended: true })); // this is for form handlig ...

// multer setup ..
const storage = multer.diskStorage({
    destination: function (req, file, cb) {
        cb(null, 'public/uploads');
    },
    filename: function (req,file,cb) {
        const uniquename = Date.now() + '-' + Math.round(Math.random() * 1E9) + '-' + file.originalname;
        cb(null, uniquename);
    }
});
const upload = multer({ storage: storage });

app.get('/',(req,res) => {
    res.render('index');
});
app.get('/about',(req,res)=> {
    res.render(('about'));
});
app.get('/contact',(req,res)=> {
    res.render('contact');
});
app.get('/products',(req,res)=> {
    res.render('products');
});
app.get('/create', async (req, res) => {
    try {
        const collection = db.collection("products");
        const products = await collection.find({}).sort({_id:-1}).toArray();
       // res.json(products);
        res.render('create',{products}); 
    } catch (error) {
        console.log("cant fetch data from mongodb", error);
    }
});
app.get('/api/products',async (req,res) => {
    try {
        const collection = db.collection("products");
        const products = await collection.find({}).sort({_id:-1}).toArray();
        res.json(products);
       // res.render('create',{products}); 
    } catch (error) {
        console.log("cant fetch data from mongodb", error);
    }
});
app.post('/api/save/product', upload.single('image'), async (req, res) => {
  try {
    const { title, description, price } = req.body;
    const image = req.file ? 'uploads/' + req.file.filename : '';

    const product = {
      title,
      description,
      price: parseFloat(price),
      image,
      stock: 2
    };

    await db.collection("products").insertOne(product);

    res.status(201).json({ success: true, message: "Product created", product });
  } catch (error) {
    console.error('cant save data getting error', error);
    res.status(500).json({ success: false, error: "Internal server error" });
  }
});

app.post('/products/store', upload.single('image'), async (req, res) => {
    try {   
        const { title, description, price } = req.body;
        const image = req.file ? 'uploads/' + req.file.filename : '';
        const product = {
            title,
            description,
            price: parseFloat(price),
            image,
            stock:2
        }
        await db.collection("products").insertOne(product);
        res.redirect('/create');
    } catch (error) {
        console.log('cant save data getting error',error);   
    }
});
app.get('/product/delete/:id', async (req, res) => {
    try {
        const id = req.params.id;
        console.log("ID is here For Delete ",id);
        const collection = db.collection("products"); 
        await collection.deleteOne({ _id: new ObjectId(id) }); // 👈 convert string to ObjectId
        res.redirect('/create');
    } catch (error) {
        console.log('cant delete data',error);
    }
});

app.get('/api/delete/product/:id',async(req,res) => {
    try {
        const id = req.params.id;
        console.log("ID is here For Delete ",id);
        const collection = db.collection("products"); 
        await collection.deleteOne({ _id: new ObjectId(id) }); // 👈 convert string to ObjectId
        res.status(200).json({ success: true, message: "Product Deleted Succesfully", product });
    } catch (error) {
        console.log('cant delete data',error);
    }
});
app.listen(port,()=> {
    console.log('Hello Dost Project Is Running On ',port);
})