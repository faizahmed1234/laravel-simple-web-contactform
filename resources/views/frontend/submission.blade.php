@extends('frontend.layouts.main')

@section('main-container')
<?php 
    // Email Validation using php.

    // if (isset($_POST['email']) && $_POST['email'] != '') {
    //     if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    //         $fname = $_POST['firstname'];
    //         $lname = $_POST['lastname'];
    //         $email = $_POST['email'];
    //         $issue = $_POST['issue'];
    //         $comment = $_POST['comment']; 
    //     }
    // }

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $issue = $_POST['issue'];
    $comment = $_POST['comment']; 

?>


<body>
    <div class="container mt-3 ">
        <h2 style="text-align: center;">Review Details</h2>
    </div>

    <div class="container">
        <table class="table table-hover">
            <tbody>
                <tr>
                    <th scope="row">First Name</th>
                    <td><?php echo $fname ?></td>
                </tr>

                <tr>
                    <th scope="row">Last Name</th>
                    <td><?php echo $lname ?></td>
                </tr>
                
                <tr>
                    <th scope="row">Email</th>
                    <td><?php echo $email ?></td>
                </tr>
                
                <tr>
                    <th scope="row">Issue</th>
                    <td><?php echo $issue ?></td>
                </tr>
                
                <tr>
                    <th scope="row">Comment</th>
                    <td><?php echo $comment ?></td>
                </tr>
            </tbody>
        </table>
    </div>
     

    <div class="container">
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>

        <div class="alert alert-primary alert-dismissible d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
                <?php echo "<strong>Thankyou $fname</strong>, You can edit your $issue." ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div> 
    </div>
    
    <div class="container">
        <a class="btn btn-outline-primary" id="edit" onclick="history.back(-1)" role="button">Edit</a>
        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#submitForm">Submit</button>
    </div>

    <!-- MODAL FOR SUBMISSION -->

<div class="modal fade" id="submitForm" tabindex="-1" aria-labelledby="submitForm" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="submitForm">Submitted Successfully!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="container">
          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </symbol>
          </svg>   
        
          <div class="alert alert-success d-flex align-items-center mt-3" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
                <?php echo "Thankyou $fname, for submitting your $issue. We will get back you ASAP." ?> 
            </div>
          </div>

        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal"><a href="index.php">Close</a></button>
      </div>
      
    </div>
  </div>
</div>
    

   
  </body>

@endsection