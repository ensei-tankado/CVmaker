<!DOCTYPE html>

<html lang="en">

      <head>
            <meta charset="utf-8" />
            <title>Resume Generator</title>
            <link rel="stylesheet" href="sty.css" />
      </head>

      <body>
            <header><h2>Resume Generator</h2></header>

            <p>Enter your details</p>
            <form method="post" action="resume.php">
                  <?php
                        $array= array( 'firstname'=>'First Name', 'lastname'=>'Last Name', 'number'=>'Ph no', 'email'=>'Email id', 'education'=>'Educational Qualifications');
                        foreach ($array as $key => $value)
                              {
                                    echo"<label for={$key}> {$value}  </label>";
                                          echo"<input type='text' id={$key} name={$key} /><br /><br />";
                              }

                  ?>
            <label for="dob">Date of Birth  </label>
                     <input type="date" id="dob" name="dob" max="2010-12-31" min="1900-01-01" /><br /> <br />
            <label for="gender">Gender</label>
                     Male <input id="gender" name="gender" type="radio" value="Male" />
                     Female <input id="gender" name="gender" type="radio" value="Female" /><br /> <br />
            <label for="exp">Experience</label>
                     <textarea id="exp" name="exp"></textarea><br /> <br />
            <div class="sub"><input type="submit" value="Generate Resume" name="cv" /> </div>
            </form>
      </body>
</html>
