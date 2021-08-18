     <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            

            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img src=""/>
                    </div>
                    <div class="col-6">
                        <H3>Professional Bakcend Developer</H3>
                        <h1>
                            Pepple Sunny Lysias
                        </h1>
                        <P>
                            Actively developing cool backend products and helping them achieve their goals on the front end.
                        </P>

                        <div class="row">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Get In Touch</button>
                            <button type>View PortFolio</button>
                        </div>

                    </div>
                </div>
            </div>
               
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form class="row g-3"  method="POST" action="/">
                      @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" name="name">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                             </div>

                             <input type="submit" value="Submit">
                      </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>
            </div>
        </div>