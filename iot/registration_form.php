<!-- Student Form -->
<div class="col-sm-8">
						<div class="card" id="showstudentForm">
							<div class="card-header bg-warning"><h4 class="mb-0">Student Form - Basic Information </h4></div>
							<div class="card-body bg-light">
								<div>
									<form method="post" id="formStudent">
										<div class="form-group row">
											<div class="col-lg-4">
												Name<input type="text" class="form-control form-control-sm" id="studentName" name="student_name" required>
												Father's Name<input type="text" class="form-control form-control-sm" name="student_fname">
												Mother's Name<input type="text" class="form-control form-control-sm" name="student_mname">
												Mobile<input type="text" class="form-control form-control-sm" name="student_mobile">
											</div>
											<div class="col-lg-4">
												Date of Birth<input type="date" class="form-control form-control-sm" name="student_dob" value="<?=$today;?>">
												Aadhaar Number<input type="text" class="form-control form-control-sm" name="student_aadhaar">
												Email<input type="email" class="form-control form-control-sm" name="student_email">
											</div>
											<div class="col-lg-4">
												Address<textarea class="form-control form-control-sm" rows="2" cols="30" name="student_address"></textarea>
												<br>
												<?php selectCategory($conn,'0');?>
												<input type="radio" checked name="student_type" value="H">Hostler
												<input type="radio" name="student_type" value="D">Day Scholar
												<br><br>
												University Transport:<input type="radio" checked name="student_transport" value="Y">Yes
												<input type="radio" name="student_transport" value="N">No
												<br><br>
												<input type="radio" name="student_gender" value="M" checked>Male 
                    							<input type="radio" name="student_gender" value="F">Female
											</div>
										</div>
										<div class="form-group row">
											<div class="col-lg-4">
												<input type="hidden" name="inst_id" id="inst_id">
												<input type="hidden" name="program_id" id="program_id">
												<input type="hidden" name="action" value="addStudent">
												<input type="submit" class="btn btn-primary btn-block" value="Add Student">
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>