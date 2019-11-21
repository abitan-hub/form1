<html>
        <head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> </head> </html>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style>
                .as{ 
                        border: 1px solid black;
                        margin: 1px solid black;
                        padding:1px;
                }
                input{
                border:2px solid red;
                background-color: skyblue;

                }
                .row{
                        border: 5px solid green;
                        background-color: seagreen;
                        margin: 5px;
                        padding: 1px;
                        
                }
                textarea{
                        border: 5px solid blue;
                        background-color: purple;
                }
                option{
                       
                        border: 5px solid yellow;
                        background-color: violet;
                }
                }
        </style>
     </head>
    <body>
        
        <div class="container">
            <form method='post' action="{{ route('store')}}">
                @csrf
                <div class="row">
                        <div class="col-md-6 as ">
                            first name   <input type="text" placeholder="First Name" name="first_name" ></div>
                        <div class="col-md-6 as">
                            last name    <input type="text" placeholder="Last Name" name="last_name" ></div>
                </div>
                <div class="row">
                        <div class="col-md-8 ">
                            email        <input type="text" placeholder="email" name="email"></div>
                </div>   
                <div class="row">             
                         <div class="col-md-12 ">  description <textarea  cols="30" rows="2" placeholder="description here" name="description"></textarea></div>
                </div>
                <div class="row"> 
                        <div class="col-md-12 ">
                                        Gender:<input type="radio" name="gender" value="male"> Male
                                               <input type="radio" name="gender" value="female">Female<br>
                        <div class="col-md-6 ">
                             subject<input type="checkbox" name="math" value="math">math
                             <input type="checkbox" name="science" value="science">science
                             <input type="checkbox" name="nepali" value="nepali" checked>nepali<br></div>
                </div>
                <div class= "row">
                        <div class="col-md-6 ">
                             country<select>
                                        <option value="napal">nepal</option>
                                        <option value="pakistan">pakistan</option>
                                        <option value="china">china</option>
                                        <option value="bhutan">bhutan</option>
                                      </select></div> 
                </div>
                <br>
        </div>
                
                
                <div class="row">
                        <div class="col-md-4 ">
                        <button class="btn btn-success" a href="">register</button></div>
                        <div class="col-md-4 ">
                        <button class="btn btn-primary">reset</button></div>
                         <div class="col-md-4 ">
                         <button class="btn btn-danger">Cancle</button></div>
                </div>
            </form>
        </div>
        
    </body>
</html>