@extends('frontend.layouts.main')

@section('main-container')

<body>
   <div class="container ">
    	<form class=" g-3 needs-validation mt-3" method="POST" action="{{url('/submission')}}" id="submissionForm">
    	@csrf	
		<div class="row">
  				<div class="col">
  					<label for="firstname" class="form-label"><strong>First Name</strong></label>
    				<input type="text" class="form-control" placeholder="Ex: Faiz" id="firstname" name="firstname" aria-label="First name" required>
  				</div>

  				<div class="col">
  					<label for="lastname" class="form-label"><strong>Last Name</strong></label>
    				<input type="text" class="form-control" placeholder="Ex: Ahmed" id="lastname" name="lastname" aria-label="Last name" required>
  				</div>
			</div>
			
			<div class="mb-3">
  				<label for="email" class="form-label mt-3"><strong>Email address</strong></label>
  				<input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
			</div>

			<div class="mb-3">
                <label class="form-label" for="issue"><strong>Issue</strong></label>
                <select class="form-select" id="issue" name="issue" required>
                    <option selected>Select Issue</option>
                    <option value="Query">Query</option>
                    <option value="Feedback">Feedback</option>
                    <option value="Complain">Complain</option>
                    <option value="Other">Other</option>
                </select>
            </div>

   
    		<label for="comment" class="form-label"><strong>Comment</strong></label>
    		<div>
    			<textarea name="comment" id="editor">
            		&lt;p&gt;Share what you experienced.&lt;/p&gt;
        		</textarea>
    		</div>

			<input class="btn btn-outline-dark mt-3" type="submit" value="Submit" required>

    	</form>
    </div>

    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>


 
  </body>

@endsection
