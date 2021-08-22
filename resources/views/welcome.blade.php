
<!doctype html>
<html lang="en"> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">

    <title>Pepple Sunny's Images</title>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap");

* {
    margin: 0px;
    padding: 0px;
    box-shadow: 0px;
    font-family: "Mulish", sans-serif;
}

body {
    font-family: "Mulish", sans-serif;
}
a {
    font-family: "Mulish", sans-serif;
}
.sidebar {
    background-color: #1a202c;
    height: 100vh;
}

p {
    font-weight: 300;
    font-size: 0.9rem;
}
.image-controller {
    width: 100%;
    max-width: 50px;
    border-radius: 50px;
}
.main-work {
    color: white;
    text-align: center;
    font-weight: 400;
}
.main-area {
    height: 100vh;
}

.main-area h3 {
    color: green;
}

.services {
    display: flex;
    justify-content: space-around;
}
.services img {
    width: 100px;
}

.projects {
    display: flex;
    justify-content: space-around;
}

.projects img {
    width: 350px;
}

.form-control:focus {
    border-color: #000;
    box-shadow: none;
}

label {
    font-weight: 600;
}

.error {
    color: red;
    font-weight: 400;
    display: block;
    padding: 6px 0;
    font-size: 14px;
}

.form-control.error {
    border-color: red;
    padding: 0.375rem 0.75rem;
}
        </style>
  </head>
  <body>
    

    <div class="main container-fluid">

        <div class="row">
            <div class="col-md-3 sidebar mb-5">
                <img src="{{asset('images/pepple.jpeg')}}" class="image-container mb-2 mt-5" style="max-width:200px; width:100%; margin:auto; display:block; border-radius: 150px;" />
                <h4 class="main-work mb-5">Pepple Sunny</h4>
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal" style="max-width:200px; width:100%; margin:auto; display:block;">
                    Contact Me!
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Contact Me!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-2"  method="POST" action="/">
                               @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" name="name">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1"  name="email">
                                    </div>`


                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                                    </div>

                                    <input type="submit" value="Submit" class="btn btn-success mt-3" >
                            </form>
                        </div>
                      
                        </div>
                    </div>
                    </div>
                    
            </div>
            <div class="col-md-9 main-area px-5">
                <div class="container mb-3">
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                         @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif

                    <h3 class="mt-3 mb-2">About Me</h3>
                    <p>
                         I am passionate about my work. Because I love what I do, I have a steady source of motivation that drives me to do my best.
                         In my last job, this passion led me to challenge myself daily and learn new skills that helped me to do better work. 
                         For example, I taught myself how to use PHP AND Node Js to improve the quality of our photos and graphics.
                         I soon became the go-to person for any design needs. </p>
                    <p>
                         As a Backend Engineer, I have been doing some little projects for friends and believe at this point it is time to challenge myself in a high-pressure working environment (simulating tech companies ) 
                         to showcase my skills and build more confidence in backend development and enjoy working relationships with fellow interns. Below gives strong reasons for what I plan to achieve at the end of the Internship. 
                </p>
                </div>
                <div class="container mb-3" >
                    <h3 class="mb-2">My Services</h3>
                    <div class="services">
                        <div>
                            <img src="{{asset('/images/laravel.png')}}">
                            <p>Laravel PHP</p>
                        </div>
                        <div>
                            <img src="{{asset('/images/node.png')}}">
                            <p>Node Js</p>
                        </div>
                        <div>
                             <img src="{{asset('/images/python.png')}}">
                            <p>Python</p>
                        </div>
                    </div>
                </div>
                <div class="container mb-3">
                    <h3 class="mb-2">My Projects</h1>
                   <div class="projects">
                       <div>
                           <a href="https://tefconnect.com"><img src="{{asset('/images/tefconnect.png')}}" /></a>
                       </div>
                        <div>
                           <a href="https://aura.transcorphotels.com"><img src="{{asset('/images/aura.png')}}" /></a>
                       </div>
                        <div>
                           <a href="https://www.cloudspacetechs.com/"><img src="{{asset('/images/cloudspecs.png')}}" class="project-controller"/></a>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>