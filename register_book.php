<?php
    // register_book.php
    include "db.php";
    include "includes/top.php";
 ?>

<div class="container main-content">
  <div class="row">
    <div class="col-sm-12">
      <form class="form-horizontal register-book-form" action="register_book.php" method="post">
        <div class="form-group">
          <label for="title" class="col-sm-2 control-label">Title</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="title" placeholder="Title">
          </div>
        </div>
        <div class="form-group">
          <label for="edition" class="col-sm-2 control-label">Edition</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="edition" placeholder="edition"
                   min="1" max="20">
          </div>
        </div>
        <div class="form-group">
          <label for="isbn" class="col-sm-2 control-label">ISBN</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="isbn" placeholder="ISBN">
          </div>
        </div>
        <div class="form-group">
          <label for="instructor" class="col-sm-2 control-label">Instructor</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="instructor" placeholder="Instructor's Name">
          </div>
        </div>
        <div class="form-group">
          <label for="author" class="col-sm-2 control-label">Author</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="author" placeholder="Authors' Names">
          </div>
        </div>
        <div class="form-group">
          <label for="department" class="col-sm-2 control-label">Department</label>
          <div class="col-sm-10">
            <select class="form-control" name="department">
              <?php
                $subjects = DB::GetSubjects();
                foreach ($subjects as $subject) {
                  echo "<option>" . $subject['subjects'] . "</option>";
                }
               ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="major" class="col-sm-2 control-label">Major</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="major" placeholder="Major">
          </div>
        </div>
        <div class="form-group">
          <label for="course-number" class="col-sm-2 control-label">Course Number</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="course-number" placeholder="ex) CSIT 291">
          </div>
        </div>
        <div class="form-group">
          <label for="condition" class="col-sm-2 control-label">Condition</label>
          <div class="col-sm-10">
            <select class="form-control" name="condition">
              <option>New</option>
              <option>Like New</option>
              <option>Very Good</option>
              <option>Good</option>
              <option>Acceptable</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Register!</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


 <?php include "includes/bottom.php" ?>
