import { useState } from "react";
const Test = () => {
    const [title, setTitle] = useState(null);
    return (
        <div>
            <div className="container">
                <div className="row mt-5">
                    <div className="col-lg-6">
                        <h2>Hello World</h2>
                        <input type="text" className="form-control" onKeyUp={e => setTitle(e.target.value)} /> <br />
                        {title == null ? (
                            <div>Input has not text</div>
                        ) : (
                                <div>{ title }</div>
                        )}
                    </div>
                </div>
           </div>
        </div>
    )
}
export default Test;