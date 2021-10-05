@extends('master')

@section('title', 'House Of Animals')

@section('content')

    <!-- site content -->
    <div class="container-fluid site-container">
        <div class="container form-container post-container w-100">
            <h1 class="post-title">Hello World</h1> <!-- post title -->
            <p class="author">written by: Carolina</p> <!-- written by -->
            <span class="timeup">published: this many minutes ago</span> <!-- published at -->
            <div class="post-full">
                <img src="img/bunny.jpg" alt="" class="post-img"> <!-- post img -->
                <p class="post-text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Magni culpa laudantium consectetur dolore consequuntur accusamus porro in unde, 
                    corrupti quaerat molestias asperiores vel voluptatibus nulla nihil fugit perferendis assumenda dignissimos! 
                    Laborum fugit quibusdam, magni nihil officiis pariatur molestias delectus cupiditate animi inventore. 
                    Ex, sit provident obcaecati possimus, eligendi corrupti soluta expedita cum architecto dolorum nesciunt 
                    tenetur commodi suscipit laudantium. Quis vitae impedit aliquam repudiandae, nam perferendis animi 
                    sequi libero minima. Impedit officia pariatur consequuntur aliquam ipsa officiis consequatur eligendi 
                    reiciendis dolor aperiam commodi quae tempora incidunt alias laborum eveniet odit recusandae minus, 
                    perspiciatis voluptas, corporis non quia aut accusamus. Fuga molestiae hic ut obcaecati, eaque sequi 
                    blanditiis nulla non aspernatur inventore explicabo, laudantium deleniti eveniet. Sint cupiditate, 
                    harum suscipit consequatur quidem nulla consequuntur ipsum quo veritatis ex perspiciatis odio maiores 
                    saepe optio vero minus a accusantium praesentium ducimus voluptatum exercitationem dolorem facilis! 
                    Doloribus est ipsum qui necessitatibus libero aliquam deserunt aperiam culpa. Sed, quos nisi! 
                    Perferendis necessitatibus, explicabo praesentium rerum ut accusamus fugiat nesciunt vero unde. 
                    Corrupti atque soluta perferendis earum, maxime rem quod voluptatibus quaerat illum aperiam doloribus at 
                    expedita similique ipsa a eligendi vero animi, quis, tempore autem labore! 
                    Neque aperiam possimus eum rem itaque odit! Quasi itaque consectetur numquam veniam voluptatem, 
                    iure vel dicta fugiat quod distinctio nihil exercitationem possimus soluta, voluptatum minima ullam 
                    architecto placeat modi fugit doloremque quaerat alias? Vero, nobis tempore aspernatur sunt deserunt assumenda 
                    voluptate doloremque quod. Minima excepturi aperiam quisquam nobis rerum praesentium dolorum iusto cupiditate! 
                    Ratione ducimus natus temporibus reiciendis in sapiente possimus! Sequi minus atque aspernatur blanditiis 
                    possimus ducimus doloribus natus amet veniam, veritatis dolore aut quam. Aliquid hic, ab alias 
                    consectetur velit at et neque illo ratione blanditiis accusantium corporis beatae dignissimos incidunt sequi 
                    enim quas mollitia! Nostrum, quaerat incidunt. Corrupti soluta vel quaerat recusandae repudiandae omnis accusamus quis?
                </p> <!-- post text -->
            </div>
            <div class="category">
                <h4>Category: </h4> <!-- category title -->
                <button class=" sign-up cat-btn" href="/home">Rabbits</button> <!-- selected category -->
                <!-- <button class=" sign-up cat-btn" href="/home">Dogs</button> selected category -->
            </div>
            <div class="likes">
                <ion-icon class="paw-outline" name="paw-outline"></ion-icon> <!-- likes -->
                <p class="likes-counter">1</p> <!-- amount of likes -->
            </div>
        </div>

        <!-- leave comment -->
        <div class="container comment-container w-100">
            <h4 class="leave-comment">Leave us a comment:</h4>
            <textarea rows="2" cols="10" class="comment" placeholder="Write a comment"></textarea>
            <button class="sign-up comment-submit">Submit</button>
        </div>

        <div class="container comment-section">
            <!-- already posted comments -->
            <h4 class="section-title">Comments:</h4>
            <ul class="comment-list form-container w-100">
                <li class="comment-item">
                    <p class="username">@carosem</p> <!-- username -->
                    <span class="comment-time">this many minutes ago</span> <!-- when they commented -->
                    <p class="comment-up">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Excepturi eligendi et tempore quaerat ab deserunt culpa exercitationem sunt 
                        ullam laboriosam!</p> <!-- comment -->
                </li>
                <li class="comment-item">
                    <p class="username">@twiddyTV</p> <!-- username -->
                    <span class="comment-time">this many minutes ago</span> <!-- when they commented -->
                    <p class="comment-up">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Odio fuga quibusdam officiis aliquam quisquam, similique harum quis voluptatem? 
                        Cum, ipsum!</p> <!-- comment -->
                </li>
            </ul>
        </div>

        <!-- back to home button -->
        <div class="container-fluid home-container">
            @csrf
            <button class="sign-up home-btn"><a href="/home"><i class="fa fa-home" aria-hidden="true"></i>Home</a></button>
        </div>
    </div>

@endsection