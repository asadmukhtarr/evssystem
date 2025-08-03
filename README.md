# React Guidlines..

- Step # 1 : Donwload NodeJs And Install
- Step # 2 : npx create-react-app project ..
- Step # 3 : For Start React Project: npm start

# Create First Project In PHP

- Download Xampp
- Install Xampp
- Create A New PHP File In New Project Folder : c://xampp/htdocs/{project}

# Guidlines For Github

- Download And Install Gitbash ..
- Create Respository On Github ...
- For Clone : git clone https://github.com/asadmukhtarr/evssystem.git ..
- For Push Data There Are Three Steps ..
  - Git add .
  - Git commit -m "Your Message"
  - Git push
- For Pul : Git Pull ...
  - ( We can only take pull of that repositary on which we have access and clone also)

# Core PHP Project ...

- Authentication System / Login System ..
  - Login
  - Register
  - Home
- CRUD System ...
- echo is use for print anything on screen ..

# Interview Questions

- What is CDN Files?
- What is Difference Between cdn file And Installation?
- Difference Between Include And Require?
- What is difference between echo and print in php ? echo is friendly and useable in all types of project and print is use for print array ...
- what is use of header function ?? This function is useable in redirec proccess ..
- What we can use in concatiation operate in php? We can use .

# Before Install Laravel Only First Time

- Download Composer ..
- composer global require laravel/installer

# Laravel Installation

- Laravel new evssystem
- For Run Project: php artisan serve
- Steps For Install Laravel:
  - Install Xampp
  - Install Composer And RUn This command: composer global require laravel/installer
  - For Create New Project In Laravel: Laravel new project-name
- Authentication System ...
  - composer require laravel/ui
  - php artisan ui vue --auth
  - php artisan migrate
  - npm install / nodejs install ..
  - npm run dev

# laravel guidelines ...

      - We should every view through controllers ...
      - Every Route should have specific name ..
      - Laravel is very case sensitive on server so please make sure about small and capital words of file name ..
      - namecheap meaning in laravel : folder
      - prefix meaning in laravel is: perant route ...

# Documentation ..

      - Login System :- -:- -:- -:- -:-
      - After Login
        - Dashboard
        - Products ( Create Product , All Products , Categories)
        - Stock Management ( Sales , Stock overview )
        - User Management ..
        - Logout ...

# Routes In React

        - Step # 1: Npm install react router dom ..
        - Step # 2: import { BrowserRouter } from "react-router-dom" and  <BrowserRouter>
                                                                          <App />
                                                                      </BrowserRouter>
        - Step # 3:  <Routes>
                <Route path="/" element={<Home />} />
                 </Routes>
        - Step # 4: import import { Link } from 'react-router-dom' and use Link instead of <a>
