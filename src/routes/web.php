 <?php
    // MyVendor\contactform\src\routes\web.php
    Route::get('contact', function(){
        return view('contactform::contact');
    })->name('contact');
 ?>