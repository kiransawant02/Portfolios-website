<?php include('./inc/header.php'); ?>
<body>
 <main class="content mt-3">
 <section>
 <div class="container">
 <div class="row">
 <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
 <div class="bg-primary-soft p-4 p-sm-5 border border- shadow mt-3">
 <div class="text-center mb-4">
 <h2 class="login_title text-dark"> MyJoho</h2>
 </div>
 <h1 class="text-center mt-2 text-dark">Update your Profile</h1>
 <form action="updateinfo.php" method="POST" enctype="multipart/formdata">
 <div class="mb-3">
 <label for="exampleInputName" class="form-label text-dark">Insert 
Image as a profile Picture</label>
 <input type="file" id="avatar" name="img1" accept="image/png, 
image/jpeg">
 </div>
 <div class="mb-3">
 <label for="exampleInputUserName" class="form-label textdark">Insert Image of your past work</label>
 <input type="file" id="avatar" name="img2" accept="image/png, 
image/jpeg">
 </div>
 <div class="services-dropdown mb-3 text-dark">
 <label for="services-names text-dark">Choose a Category</label>
 <select name="selects" id="service-names">
 <option value="Music Production">Music Production</option>
 <option value="Web Developement">Web Developement</option>
 <option value="Fitness">Fitness</option>
 <option value="Illustrator">Illustrator</option>
 <option value="Vocalist">Vocalist</option>
 <option value="Tutor">Tutor</option>
 </select>
 </div>
 <div class="col-sm-6 text-dark">
 <label class="form-label mb-3 ">Enter Your Username:</label>
 <input type="text" name="uname">
 </div>
 <div class="aboutUser mb-4 text-dark">
 <label for="exampleInputUser" class="form-label mb-3 ">About 
Yourself</label>
 <textarea type="text" name="userinfo" class="form-control" 
id="exampleInputUser" aria-describedby="userinfoHelp">
 </textarea>
 </div>
 <div class="mb-3 ">
 <h4> <label for="exampleInputUserName" class="form-label textdark">Insert links of your Social Media Handles</label></h4>
 </div>
 <div class="Links-user mb-3">
 <p for="instagramuser" class="insta-label text-dark">Instagram Link of 
Your Acount</p>
 <input type="url" id="avatar" name="link1" accept="href">
 </div>
 <div class="Links-user mb-3">
 <p for="website-user" class="insta-label text-dark">Link of Your 
LinkedIn</p>
 <input type="url" id="avatar" name="link2" accept="href">
 </div>
 <div class="submitedited text-center">
 <button type="submit" name="submit4" class="btn btn-success mt-2" 
value="submit">submit</button>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
 </section>
 </main>
 
<?php include('./inc/footer.php'); ?>