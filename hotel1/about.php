<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SM Hotel - ABOUT</title>
    <?php require('inc/links.php');?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">

  

    <style>
        .pop:hover{
       border-top-color:#2ec1ac; !important;
       transform:scale(1.03);
       transtion:all 0.3s;
        }

        .box{
          border-top-color:var(--teal) !important;
        }
   </style>

 </head>
 <body class="bg-light">

 <?php require('inc/header.php'); ?>
  
        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">ABOUT US</h2>
            <div class="h-line bg-dark"></div>
           <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eos autem vitae? <br>Quam, illo! Quos provident eveniet alias quod distinctio.
          </p>

          <div class="container">
            <div class="row justify-content-between aling-items-center">
                <div class="col-lg-6 col-md-5 mb-4  order-lg-1 order-md-1 order-2">
                    <h3 class="mb-3">Lorem ipsum dolor sit.</h3>
                    <p>
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad accusantium aliquam excepturi quam magni aliquid? Voluptate.
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque deleniti quam quaerat dicta est illo earum?
                   </p>
              </div>
              <div class="col-lg-5 col-md-5 mb-4  order-lg-2   order-md-2 order-1">
                <img src="rana-sawalha-IhuHLIxS_Tk-unsplash.jpg" class="w-100">
                    
                    </div>
              </div>
          </div>
     
         <div class="container mt-5">
            <div class="row">
              <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                  <img src="5-stars.png" width="70px">
                  <h4 class="mt-3">100+ ROOMS</h4>
               </div>
             </div>
             
             <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                  <img src="supporter.png" width="40px">
                  <h4 class="mt-3">200+ CUSTOMERS</h4>
               </div>
             </div>

             <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                  <img src="rating.png" width="70px">
                  <h4 class="mt-3">150+ REVIEWS</h4>
               </div>
             </div>

             <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                  <img src="cleaning-staff.png" width="70px">
                  <h4 class="mt-3">200+ STAFFS</h4>
               </div>
             </div>

             <h3 class="my-5 fw-bold h-font text-center"> MANAGEMENT TEAM</h3>

             
               <div class="cointainer px-4">
                  <div class="swiper mySwiper">
                    <div class="swiper-wrapper mb-5">
                      <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="bruce-mars-8YG31Xn4dSw-unsplash.jpg"class="w-100">
                        <h5 class="mt-2">Random Name</h5>
               </div>
                 
               <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="bruce-mars-8YG31Xn4dSw-unsplash.jpg"class="w-100">
                        <h5 class="mt-2">Random Name</h5>
               </div>
               <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="bruce-mars-8YG31Xn4dSw-unsplash.jpg"class="w-100">
                        <h5 class="mt-2">Random Name</h5>
               </div>
               <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="bruce-mars-8YG31Xn4dSw-unsplash.jpg"class="w-100">
                        <h5 class="mt-2">Random Name</h5>
               </div>
               <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="bruce-mars-8YG31Xn4dSw-unsplash.jpg"class="w-100">
                        <h5 class="mt-2">Random Name</h5>
               </div>
               <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="bruce-mars-8YG31Xn4dSw-unsplash.jpg"class="w-100">
                        <h5 class="mt-2">Random Name</h5>
               </div>
               <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="bruce-mars-8YG31Xn4dSw-unsplash.jpg"class="w-100">
                        <h5 class="mt-2">Random Name</h5>
               </div>
               <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                        <img src="bruce-mars-8YG31Xn4dSw-unsplash.jpg"class="w-100">
                        <h5 class="mt-2">Random Name</h5>
               </div>


               </div>
                     <div class="swiper-pagination"></div>
                 </div>
               </div>

  
    <?php require('inc/footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
      <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView:4,
      spaceBetween:40,
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
           slidesPerView: 1,
        },
        640: {
           slidesPerView: 1,
        },
        768: {
           slidesPerView: 3,
        },
        1024: {
           slidesPerView: 3,
        },
      }
    });
  </script>

   
  </body>
</html>
