<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my profile</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body style="background-color: rgb(231, 225, 217)">
    <div class="container"
        style="border: 2px solid black ;margin-left:150px; margin:100px ; padding:40px; background-color: white">
        @if ($profile)
            <form action="{{secure_url( route('clientprofile.update', $profile->id) )}}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{ $profile->image }}" alt="{{ $profile->image }}"
                                style="height:160px ;border:1px solid black" />
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="image" value="{{ $profile->image }}" />
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5>
                                {{ $profile->user->name }}
                            </h5>
                            <div>
                            </div>
                            <p class="proile-rating"><span></span></p>

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                        role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                        role="tab" aria-controls="profile" aria-selected="false">réseaux
                                        sociaux</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn btn-success" name="btnAddMore"
                            value="Edit Profile" />

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <h4>bio</h4>
                            <textarea name="bio" style=" background-color:beige ">{{ $profile->bio }}</textarea>
                            <a class="btn btn-success" style="color:white" href="{{ route('clientIndex.index') }}">page
                                acceuil
                            </a>

                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>User Id</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->id_user }} </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{ $profile->user->name }}</P>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="email" value="{{ $profile->user->email }}"
                                            style=" background-color:beige" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Phone</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" style=" background-color:beige" name="phone"
                                            value=" {{ $profile->phone }} " />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>genre</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" style=" background-color:beige" name="genre"
                                            value="{{ $profile->genre }}" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>adresse</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" style=" background-color:beige" name="adresse"
                                            value="{{ $profile->adresse }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>facebook</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" style=" background-color:beige" name="facebook"
                                            value="{{ $profile->facebook }}" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label> instegram</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" style=" background-color:beige" name="insta"
                                            value="{{ $profile->insta }}" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </form>

    </div>
@else
    <form action="{{ secure_url(route('clientprofile.store') )}}" method="POST" enctype="multipart/form-data"
        style="border:2px solid black; padding:10px">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPassword4">phone</label>
                <input type="number" class="form-control" name="phone" placeholder="phone">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" name="adresse" placeholder="adresse">
        </div>
        <div class="form-group">
            <label for="inputAddress2">image</label>
            <input type="file" class="form-control" name="image" placeholder="image">
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="inputCity">facebook</label>
                <input type="text" class="form-control" name="facebook" placeholder="facebook">
            </div>
            <div class="form-group col-md-5">
                <label for="inputCity">instegram</label>
                <input type="text" class="form-control" name="insta" placeholder="instegram">
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">genre</label>
                <select type="text" class="form-control" name="genre" placeholder="genre">
                    <option value="homme" selected>homme</option>
                    <option value="femme">femme</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="bio" placeholder="bio">
                </textarea>
        </div>

        <button type="submit" class="btn btn-primary">creer</button>
    </form>
    @endif
</body>

</html>
