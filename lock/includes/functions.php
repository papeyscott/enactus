<?php
class Utils {


	public static function displayError($key, $arr){
			if (isset($arr[$key])) {
				echo '<span class="text-danger">'.$arr[$key].'</span>';
			}
		}

	public static function redirect($loc, $msg){
			header("Location: ".$loc."?".$msg);
		}

	

	public static function uploadFile($destination, $files, $key){
			$result = [];

			$rnd = rand(00000, 99999);
			$file_name = str_replace ("", "_", $files[$key]['name'] );

			$file_name = $rnd.$file_name;
			$destination = $destination.$file_name;

			if(move_uploaded_file($files[$key]['tmp_name'], $destination)){
				$result[] = true;
				$result[] =  $destination;
			}else{
				$result[] = false;
			}

			return $result;
		}


		public static function AddBoard($dbconn, $input){
			$stmt = $dbconn->prepare("INSERT INTO board(name, position, designation, company, img_loc, date) 
				VALUES(:name, :p, :d, :c, :loc, now())");

			$data = [
				":name" =>$input['name'],
				":p" =>$input['position'],
				":d" =>$input['designation'],
				":c" =>$input['company'],
				":loc" =>$input['loc']
			];

			$stmt->execute($data);
		}


		public static function viewBoard($dbconn){
		

			$stmt = $dbconn->prepare("SELECT * FROM board ORDER BY board_id DESC ");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
			?>
				<tr><td><?php echo $row['board_id'] ?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['position'];	?></td>
					<td><?php echo $row['designation']; ?></td>
					<td><?php echo $row['company'];?></td>
				<td><img src="<?php echo $row['img_loc'];  ?>" height="40" width="60"></td>
				<td><a href="<?= 'editboard.php?id='.$row['board_id']?>"><span class="btn btn-sm btn-warning">EDIT</span></a></td>
				<td><a href="<?= 'deleteboard.php?id='.$row['board_id']?>"><span class="btn btn-sm btn-danger">DELETE</span></a></td><tr>

			

<?php 
			 } 

		}





		public static function getBoardByID($dbconn, $tm_id){
			$stmt = $dbconn->prepare("SELECT * FROM board WHERE board_id=:tid");
			$stmt->bindParam(":tid", $tm_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;
		}



		public static function updateBoard($dbconn, $input){
			$stmt = $dbconn->prepare("UPDATE board SET name=:n, position=:p, company=:c, designation=:d WHERE board_id=:stid");

			$data = [
						':n' => $input['name'],
						':p' =>$input['position'],
						':c' => $input['company'],
						':d' =>$input['designation'],
						':stid' =>$input['id']
					];

			$stmt->execute($data);
		}


		public static function deleteBoard($dbconn, $input){
			$stmt = $dbconn->prepare("DELETE FROM board WHERE board_id = :tid");
			$stmt->bindParam(":tid", $input);

			$stmt->execute();
		}


		public static function AddTeam($dbconn, $input){
			$stmt = $dbconn->prepare("INSERT INTO team(name, year, facebook, twitter, instagram, fa1, fa2, fa3, img_loc, date) 
				VALUES(:name, :yr, :fb, :tw, :ig, :fa1, :fa2, :fa3, :loc, now())");

			$data = [
				":name" =>$input['name'],
				":yr" =>$input['year'],
				":fb" =>$input['facebook'],
				":tw" =>$input['twitter'],
				":ig" =>$input['instagram'],
				":fa1" =>$input['fa1'],
				":fa2" =>$input['fa2'],
				":fa3" =>$input['fa3'],
				":loc" =>$input['loc']
			];

			$stmt->execute($data);
		}


		public static function viewTeam($dbconn){
		

			$stmt = $dbconn->prepare("SELECT * FROM team ORDER BY team_id DESC ");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
			?>
				<tr><td><?php echo $row['team_id'] ?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['year'];	?></td>
					<td><?php echo $row['fa1']; ?></td>
					<td><?php echo $row['fa2'];?></td>
					<td><?php echo $row['fa3'];?></td>
					<td><?php echo $row['facebook'];?></td>
					<td><?php echo $row['twitter'];?></td>
					<td><?php echo $row['instagram'];?></td>
				<td><img src="<?php echo $row['img_loc'];  ?>" height="40" width="60"></td>
				<td><a href="<?= 'editteam.php?id='.$row['team_id']?>"><span class="btn btn-sm btn-warning">EDIT</span></a></td>
				<td><a href="<?= 'deleteteam.php?id='.$row['team_id']?>"><span class="btn btn-sm btn-danger">DELETE</span></a></td><tr>

			

<?php 
			 } 

		}

		public static function getTeamByID($dbconn, $tm_id){
			$stmt = $dbconn->prepare("SELECT * FROM team WHERE team_id=:tid");
			$stmt->bindParam(":tid", $tm_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;
		}



		public static function updateTeam($dbconn, $input){
			$stmt = $dbconn->prepare("UPDATE team SET name=:n, year=:yr, fa1=:fa1, fa2=:fa2, fa3=:fa3, facebook=:fb, twitter=:tw, instagram=:ig WHERE team_id=:stid");

			$data = [
						':n' => $input['name'],
						':yr' =>$input['year'],
						':fa1' => $input['fa1'],
						':fa2' =>$input['fa2'],
						':fa3' =>$input['fa3'],
						':fb' =>$input['facebook'],
						':tw' =>$input['twitter'],
						':ig' =>$input['instagram'],
						':stid' =>$input['id']
					];

			$stmt->execute($data);
			
		}


		public static function deleteTeam($dbconn, $input){
			$stmt = $dbconn->prepare("DELETE FROM team WHERE team_id = :tid");
			$stmt->bindParam(":tid", $input);

			$stmt->execute();
		}





		///STAFF SECTION STARTS

		public static function AddStaff($dbconn, $input){
			$stmt = $dbconn->prepare("INSERT INTO staff(name, position, facebook, twitter, instagram, email, img_loc, date) 
				VALUES(:name, :p, :fb, :tw, :ig, :e, :loc, now())");

			$data = [
				":name" =>$input['name'],
				":p" =>$input['position'],
				":fb" =>$input['facebook'],
				":tw" =>$input['twitter'],
				":ig" =>$input['instagram'],
				":e" =>$input['email'],
				":loc" =>$input['loc']
			];

			$stmt->execute($data);
		}


		public static function viewStaff($dbconn){
		

			$stmt = $dbconn->prepare("SELECT * FROM staff ORDER BY staff_id DESC ");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
			?>
				<tr><td><?php echo $row['staff_id'] ?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['position'];	?></td>
					<td><?php echo $row['facebook']; ?></td>
					<td><?php echo $row['twitter'];?></td>
					<td><?php echo $row['instagram'];?></td>
					<td><?php echo $row['email'];?></td>
				<td><img src="<?php echo $row['img_loc'];  ?>" height="40" width="60"></td>
				<td><a href="<?= 'editstaff.php?id='.$row['staff_id']?>"><span class="btn btn-sm btn-warning">EDIT</span></a></td>
				<td><a href="<?= 'deletestaff.php?id='.$row['staff_id']?>"><span class="btn btn-sm btn-danger">DELETE</span></a></td><tr>

			

<?php 
			 } 

		}





		public static function getStaffByID($dbconn, $tm_id){
			$stmt = $dbconn->prepare("SELECT * FROM staff WHERE staff_id=:tid");
			$stmt->bindParam(":tid", $tm_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;
		}



		public static function updateStaff($dbconn, $input){
			$stmt = $dbconn->prepare("UPDATE staff SET name=:n, position=:p, facebook=:fb, twitter=:tw, instagram=:ig, email=:e WHERE staff_id=:stid");

			$data = [
						':n' => $input['name'],
						':p' =>$input['position'],
						':fb' => $input['facebook'],
						':tw' => $input['twitter'],
						':ig' => $input['instagram'],
						':e' => $input['email'],
						':stid' =>$input['id']
					];

			$stmt->execute($data);
		}


		public static function deleteStaff($dbconn, $input){
			$stmt = $dbconn->prepare("DELETE FROM staff WHERE staff_id = :tid");
			$stmt->bindParam(":tid", $input);

			$stmt->execute();
		}




		//VOLUNTEER SECTION


		public static function AddVolunteer($dbconn, $input){
			$stmt = $dbconn->prepare("INSERT INTO volunteer(name, year, company, img_loc, date) 
				VALUES(:name, :yr, :c, :loc, now())");

			$data = [
				":name" =>$input['name'],
				":yr" =>$input['year'],
				":c" =>$input['company'],
				":loc" =>$input['loc']
			];

			$stmt->execute($data);
		}


		public static function viewVolunteer($dbconn){
		

			$stmt = $dbconn->prepare("SELECT * FROM volunteer ORDER BY volunteer_id DESC ");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
			?>
				<tr><td><?php echo $row['volunteer_id'] ?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['year'];	?></td>
					<td><?php echo $row['company'];?></td>
				<td><img src="<?php echo $row['img_loc'];  ?>" height="40" width="60"></td>
				<td><a href="<?= 'editvolunteer.php?id='.$row['volunteer_id']?>"><span class="btn btn-sm btn-warning">EDIT</span></a></td>
				<td><a href="<?= 'deletevolunteer.php?id='.$row['volunteer_id']?>"><span class="btn btn-sm btn-danger">DELETE</span></a></td><tr>

			

<?php 
			 } 

		}





		public static function getVolunteerByID($dbconn, $tm_id){
			$stmt = $dbconn->prepare("SELECT * FROM volunteer WHERE volunteer_id=:tid");
			$stmt->bindParam(":tid", $tm_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;
		}



		public static function updateVolunteer($dbconn, $input){
			$stmt = $dbconn->prepare("UPDATE volunteer SET name=:n, year=:yr, company=:c WHERE volunteer_id=:stid");

			$data = [
						':n' => $input['name'],
						':yr' =>$input['year'],
						':c' => $input['company'],
						':stid' =>$input['id']
					];

			$stmt->execute($data);
		}


		public static function deleteVolunteer($dbconn, $input){
			$stmt = $dbconn->prepare("DELETE FROM volunteer WHERE volunteer_id = :tid");
			$stmt->bindParam(":tid", $input);

			$stmt->execute();
		}




			//ALUMNI SECTION STARTS HERE


		public static function AddAlumni($dbconn, $input){
			$stmt = $dbconn->prepare("INSERT INTO alumni(name, story, email, img_loc, date) 
				VALUES(:name, :str, :e, :loc, now())");

			$data = [
				":name" =>$input['name'],
				":str" =>$input['story'],
				":e" =>$input['email'],
				":loc" =>$input['loc']
			];

			$stmt->execute($data);
		}


		public static function viewAlumni($dbconn){
		

			$stmt = $dbconn->prepare("SELECT * FROM alumni ORDER BY alumni_id DESC ");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
			?>
				<tr><td><?php echo $row['alumni_id'] ?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php
										$desc = $row['story'];
									$strcut = substr($desc,0,100);
							$desc = substr($strcut,0,strrpos($strcut, ' ')).'...';
									echo $desc;
									
								 ?></td>
					<td><?php echo $row['email'];	?></td>
				<td><img src="<?php echo $row['img_loc'];  ?>" height="40" width="60"></td>
				<td><a href="<?= 'editalumni.php?id='.$row['alumni_id']?>"><span class="btn btn-sm btn-warning">EDIT</span></a></td>
				<td><a href="<?= 'deletealumni.php?id='.$row['alumni_id']?>"><span class="btn btn-sm btn-danger">DELETE</span></a></td><tr>

			

<?php 
			 } 

		}

		public static function getAlumniByID($dbconn, $tm_id){
			$stmt = $dbconn->prepare("SELECT * FROM alumni WHERE alumni_id=:tid");
			$stmt->bindParam(":tid", $tm_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;
		}



		public static function updateAlumni($dbconn, $input){
			$stmt = $dbconn->prepare("UPDATE alumni SET name=:n, story=:str, email=:e WHERE alumni_id=:stid");

			$data = [
						':n' => $input['name'],
						':str' =>$input['story'],
						':e' => $input['email'],
						':stid' =>$input['id']
					];

			$stmt->execute($data);
			
		}


		public static function deleteAlumni($dbconn, $input){
			$stmt = $dbconn->prepare("DELETE FROM alumni WHERE alumni_id = :tid");
			$stmt->bindParam(":tid", $input);

			$stmt->execute();
		}




			//Conference SECTION STARTS HERE


		public static function AddConference($dbconn, $input){
			$stmt = $dbconn->prepare("INSERT INTO conference(title, story, date) 
				VALUES(:title, :str, now())");

			$data = [
				":title" =>$input['title'],
				":str" =>$input['story']
			];

			$stmt->execute($data);
		}


		public static function viewConference($dbconn){
		

			$stmt = $dbconn->prepare("SELECT * FROM conference ORDER BY conference_id DESC ");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
			?>
				<tr><td><?php echo $row['conference_id'] ?></td>
					<td><?php echo $row['title'];?></td>
					<td><?php
										$desc = $row['story'];
									$strcut = substr($desc,0,100);
							$desc = substr($strcut,0,strrpos($strcut, ' ')).'...';
									echo $desc;
									
								 ?></td>
				<td><a href="<?= 'editconference.php?id='.$row['conference_id']?>"><span class="btn btn-sm btn-warning">EDIT</span></a></td>
				<td><a href="<?= 'deleteconference.php?id='.$row['conference_id']?>"><span class="btn btn-sm btn-danger">DELETE</span></a></td><tr>

			

<?php 
			 } 

		}

		public static function getConferenceByID($dbconn, $tm_id){
			$stmt = $dbconn->prepare("SELECT * FROM conference WHERE conference_id=:tid");
			$stmt->bindParam(":tid", $tm_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;
		}



		public static function updateConference($dbconn, $input){
			$stmt = $dbconn->prepare("UPDATE conference SET title=:n, story=:str WHERE conference_id=:stid");

			$data = [
						':n' => $input['title'],
						':str' =>$input['story'],
						':stid' =>$input['id']
					];

			$stmt->execute($data);
			
		}


		public static function deleteConference($dbconn, $input){
			$stmt = $dbconn->prepare("DELETE FROM conference WHERE conference_id = :tid");
			$stmt->bindParam(":tid", $input);

			$stmt->execute();
		}





		//TEAM VISITATION SECTION STARTS HERE


		public static function AddTeamVisit($dbconn, $input){
			$stmt = $dbconn->prepare("INSERT INTO teamvisit(name, story, date) 
				VALUES(:name, :str, now())");

			$data = [
				":name" =>$input['title'],
				":str" =>$input['story']
			];
				htmlspecialchars($data);
			$stmt->execute($data);
		}


		public static function viewTeamVisit($dbconn){
		

			$stmt = $dbconn->prepare("SELECT * FROM teamvisit ORDER BY teamvisit_id DESC ");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
			?>
				<tr><td><?php echo $row['teamvisit_id'] ?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php
										$desc = $row['story'];
									$strcut = substr($desc,0,100);
							$desc = substr($strcut,0,strrpos($strcut, ' ')).'...';
									echo $desc;
									
								 ?></td>
				<td><a href="<?= 'editteamvisit.php?id='.$row['teamvisit_id']?>"><span class="btn btn-sm btn-warning">EDIT</span></a></td>
				<td><a href="<?= 'deleteteamvisit.php?id='.$row['teamvisit_id']?>"><span class="btn btn-sm btn-danger">DELETE</span></a></td><tr>

			

<?php 
			 } 

		}

		public static function getTeamvisitByID($dbconn, $tm_id){
			$stmt = $dbconn->prepare("SELECT * FROM teamvisit WHERE teamvisit_id=:tid");
			$stmt->bindParam(":tid", $tm_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;
		}



		public static function updateTeamVisit($dbconn, $input){
			$stmt = $dbconn->prepare("UPDATE teamvisit SET name=:n, story=:str WHERE teamvisit_id=:stid");

			$data = [
						':n' => $input['name'],
						':str' =>$input['story'],
						':stid' =>$input['id']
					];

			$stmt->execute($data);
			
		}


		public static function deleteTeamvisit($dbconn, $input){
			$stmt = $dbconn->prepare("DELETE FROM teamvisit WHERE teamvisit_id = :tid");
			$stmt->bindParam(":tid", $input);

			$stmt->execute();
		}



				//Partnership SECTION STARTS HERE


		public static function AddPartnership($dbconn, $input){
			$stmt = $dbconn->prepare("INSERT INTO partnership(title, story, img_loc, date) 
				VALUES(:title, :str, :loc, now())");

			$data = [
				":title" =>$input['title'],
				":str" =>$input['story'],
				":loc" =>$input['loc']
			];

			$stmt->execute($data);
		}


		public static function viewPartnership($dbconn){
		

			$stmt = $dbconn->prepare("SELECT * FROM partnership ORDER BY partnership_id DESC ");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
			?>
				<tr><td><?php echo $row['partnership_id'] ?></td>
					<td><?php echo $row['title'];?></td>
					<td><?php
										$desc = $row['story'];
									$strcut = substr($desc,0,100);
							$desc = substr($strcut,0,strrpos($strcut, ' ')).'...';
									echo $desc;
									
								 ?></td>
				<td><a href="<?= 'editpartnership.php?id='.$row['partnership_id']?>"><span class="btn btn-sm btn-warning">EDIT</span></a></td>
				<td><a href="<?= 'deletepartnership.php?id='.$row['partnership_id']?>"><span class="btn btn-sm btn-danger">DELETE</span></a></td><tr>

			

<?php 
			 } 

		}

		public static function getPartnershipByID($dbconn, $tm_id){
			$stmt = $dbconn->prepare("SELECT * FROM partnership WHERE partnership_id=:tid");
			$stmt->bindParam(":tid", $tm_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;
		}



		public static function updatePartnership($dbconn, $input){
			$stmt = $dbconn->prepare("UPDATE partnership SET title=:n, story=:str WHERE partnership_id=:stid");

			$data = [
						':n' => $input['title'],
						':str' =>$input['story'],
						':stid' =>$input['id']
					];

			$stmt->execute($data);
			
		}


		public static function deletePartnership($dbconn, $input){
			$stmt = $dbconn->prepare("DELETE FROM partnership WHERE partnership_id = :tid");
			$stmt->bindParam(":tid", $input);

			$stmt->execute();
		}


		//TEAM VISITATION SECTION STARTS HERE


		public static function AddCampus($dbconn, $input){
			$stmt = $dbconn->prepare("INSERT INTO campus(name, story, date) 
				VALUES(:name, :str, now())");

			$data = [
				":name" =>$input['title'],
				":str" =>$input['story']
			];

			$stmt->execute($data);
		}


		public static function viewCampus($dbconn){
		

			$stmt = $dbconn->prepare("SELECT * FROM campus ORDER BY campus_id DESC ");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
			?>
				<tr><td><?php echo $row['campus_id'] ?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php
										$desc = $row['story'];
									$strcut = substr($desc,0,100);
							$desc = substr($strcut,0,strrpos($strcut, ' ')).'...';
									echo $desc;
									
								 ?></td>
				<td><a href="<?= 'editcampus.php?id='.$row['campus_id']?>"><span class="btn btn-sm btn-warning">EDIT</span></a></td>
				<td><a href="<?= 'deletecampus.php?id='.$row['campus_id']?>"><span class="btn btn-sm btn-danger">DELETE</span></a></td><tr>

			

<?php 
			 } 

		}

		public static function getCampusByID($dbconn, $tm_id){
			$stmt = $dbconn->prepare("SELECT * FROM campus WHERE campus_id=:tid");
			$stmt->bindParam(":tid", $tm_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;
		}



		public static function updateCampus($dbconn, $input){
			$stmt = $dbconn->prepare("UPDATE campus SET name=:n, story=:str WHERE campus_id=:stid");

			$data = [
						':n' => $input['name'],
						':str' =>$input['story'],
						':stid' =>$input['id']
					];

			$stmt->execute($data);
			
		}


		public static function deleteCampus($dbconn, $input){
			$stmt = $dbconn->prepare("DELETE FROM campus WHERE campus_id = :tid");
			$stmt->bindParam(":tid", $input);

			$stmt->execute();
		}




		//NATIONALS SECTION STARTS HERE


		public static function AddNationals($dbconn, $input){
			$stmt = $dbconn->prepare("INSERT INTO nationals(title, story, date) 
				VALUES(:title, :str, now())");

			$data = [
				":title" =>$input['title'],
				":str" =>$input['story']
			];

			$stmt->execute($data);
		}


		public static function viewNationals($dbconn){
		

			$stmt = $dbconn->prepare("SELECT * FROM nationals ORDER BY nationals_id DESC ");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
			?>
				<tr><td><?php echo $row['nationals_id'] ?></td>
					<td><?php echo $row['title'];?></td>
					<td><?php
										$desc = $row['story'];
									$strcut = substr($desc,0,100);
							$desc = substr($strcut,0,strrpos($strcut, ' ')).'...';
									echo $desc;
									
								 ?></td>
				<td><a href="<?= 'editnationals.php?id='.$row['nationals_id']?>"><span class="btn btn-sm btn-warning">EDIT</span></a></td>
				<td><a href="<?= 'deletenationals.php?id='.$row['nationals_id']?>"><span class="btn btn-sm btn-danger">DELETE</span></a></td><tr>

			

<?php 
			 } 

		}

		public static function getNationalsByID($dbconn, $tm_id){
			$stmt = $dbconn->prepare("SELECT * FROM nationals WHERE nationals_id=:tid");
			$stmt->bindParam(":tid", $tm_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;
		}



		public static function updateNationals($dbconn, $input){
			$stmt = $dbconn->prepare("UPDATE nationals SET title=:n, story=:str WHERE nationals_id=:stid");

			$data = [
						':n' => $input['title'],
						':str' =>$input['story'],
						':stid' =>$input['id']
					];

			$stmt->execute($data);
			
		}


		public static function deleteNationals($dbconn, $input){
			$stmt = $dbconn->prepare("DELETE FROM nationals WHERE nationals_id = :tid");
			$stmt->bindParam(":tid", $input);

			$stmt->execute();
		}

		//Partner

		public static function addPartner($dbconn, $input){
			$stmt = $dbconn->prepare("INSERT INTO partner(year,img_loc) 
				VALUES(:yr, :loc)");

			$data = [
				":yr" => $input['year'],
				":loc" =>$input['loc']
			];

			$stmt->execute($data);
		}

		public static function viewPartner($dbconn){
			$result = "";

			$stmt = $dbconn->prepare("SELECT partner_id, year, img_loc FROM partner");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
				$result .= '<tr><td scope="row">'.$row[0].'</td>
								<td scope="row">'.$row[1].'</td> 
							<td><img src="'.$row['img_loc'].'" height="40" width="60"></td>
							<th scope="col"><a href="editpartners.php?id='.$row[0].'"><span class="btn btn-sm btn-warning">EDIT</span></a></th scope="col">
								<th scope="col"><a href="deletepartners.php?id='.$row[0].'"><span class="btn btn-sm btn-danger">DELETE</span></a></th scope="col"></tr>';

			}

			return $result;
		}


		public static function updatePartner($dbconn, $input){
			$stmt = $dbconn->prepare("UPDATE partner SET year=:n WHERE partner_id=:stid");

			$data = [
						':n' =>$input['year'],
						':stid' =>$input['id']
					];

			$stmt->execute($data);

		}

		public static function deletePartner($dbconn, $input){
			$stmt = $dbconn->prepare("DELETE FROM partner WHERE partner_id = :sid");
			$stmt->bindParam(":sid", $input);

			$stmt->execute();
		}

		public static function getPartnerByID($dbconn, $sf_id){
			$stmt = $dbconn->prepare("SELECT * FROM partner WHERE partner_id=:sid");
			$stmt->bindParam(":sid", $sf_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;
		}

		//Testimony

		public static function addTestimony($dbconn, $input){
			$stmt = $dbconn->prepare("INSERT INTO testimony(name, story, img_loc) 
				VALUES(:n, :str, :loc)");

			$data = [
				":n" => $input['name'],
				":str" => $input['story'],
				":loc" =>$input['loc']
			];

			$stmt->execute($data);
		}

		public static function viewTestimony($dbconn){
			$result = "";

			$stmt = $dbconn->prepare("SELECT testimony_id, name, story, img_loc FROM testimony");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
				$result .= '<tr><td scope="row">'.$row[0].'</td>
								<td scope="row">'.$row[1].'</td> 
								<td scope="row">'.$row[2].'</td> 
							<td><img src="'.$row['img_loc'].'" height="40" width="60"></td>
							<th scope="col"><a href="edittestimony.php?id='.$row[0].'"><span class="btn btn-sm btn-warning">EDIT</span></a></th scope="col">
								<th scope="col"><a href="deletetestimony.php?id='.$row[0].'"><span class="btn btn-sm btn-danger">DELETE</span></a></th scope="col"></tr>';

			}

			return $result;
		}


		public static function updateTestimony($dbconn, $input){
			$stmt = $dbconn->prepare("UPDATE testimony SET name=:n, story=:str WHERE testimony_id=:stid");

			$data = [
						':n' =>$input['name'],
						':str' =>$input['story'],
						':stid' =>$input['id']
					];

			$stmt->execute($data);

		}

		public static function deleteTestimony($dbconn, $input){
			$stmt = $dbconn->prepare("DELETE FROM testimony WHERE testimony_id = :sid");
			$stmt->bindParam(":sid", $input);

			$stmt->execute();
		}

		public static function getTestimonyByID($dbconn, $sf_id){
			$stmt = $dbconn->prepare("SELECT * FROM testimony WHERE testimony_id=:sid");
			$stmt->bindParam(":sid", $sf_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;
		}


//Project SECTION STARTS HERE


		public static function Addproject($dbconn, $input){
			$stmt = $dbconn->prepare("INSERT INTO projects(title, story, img_loc, date) 
				VALUES(:title, :str, :loc, now())");

			$data = [
				":title" =>$input['title'],
				":str" =>$input['story'],
				":loc" =>$input['loc']
			];

			$stmt->execute($data);
		}


		

			public static function viewProject($dbconn){
			$result = "";

			$stmt = $dbconn->prepare("SELECT * FROM projects");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
				$result .= '<tr><td scope="row">'.$row[0].'</td>
								<td scope="row">'.$row[1].'</td> 
							<td><img src="'.$row['img_loc'].'" height="40" width="60"></td>
							<td scope="row">'.$row[2].'</td> 
							<th scope="col"><a href="editproject.php?id='.$row[0].'"><span class="btn btn-sm btn-warning">EDIT</span></a></th scope="col">
								<th scope="col"><a href="deleteproject.php?id='.$row[0].'"><span class="btn btn-sm btn-danger">DELETE</span></a></th scope="col"></tr>';

			}

			return $result;
		}


		public static function getProjectById($dbconn, $tm_id){
			$stmt = $dbconn->prepare("SELECT * FROM projects WHERE project_id=:tid");
			$stmt->bindParam(":tid", $tm_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;
		}



		public static function updateProject($dbconn, $input){
			$stmt = $dbconn->prepare("UPDATE projects SET title=:n, story=:str WHERE project_id=:stid");

			$data = [
						':n' => $input['title'],
						':str' =>$input['story'],
						':stid' =>$input['id']
					];

			$stmt->execute($data);
			
		}


		public static function deleteProject($dbconn, $input){
			$stmt = $dbconn->prepare("DELETE FROM projects WHERE project_id = :tid");
			$stmt->bindParam(":tid", $input);

			$stmt->execute();
		}


		//Partner

		public static function addAds($dbconn, $input){
			$stmt = $dbconn->prepare("INSERT INTO ads(img_loc) 
				VALUES(:loc)");

			$data = [ 
				":loc" =>$input['loc']
			];

			$stmt->execute($data);
		}

		public static function viewAds($dbconn){
			$result = "";

			$stmt = $dbconn->prepare("SELECT ads_id, img_loc FROM ads");
			$stmt->execute();
			while ($row = $stmt->fetch(PDO::FETCH_BOTH)) {
				$result .= '<tr><td scope="row">'.$row[0].'</td>
							<td><img src="'.$row['img_loc'].'" height="40" width="60"></td>
							<th scope="col"><a href="editads.php?id='.$row[0].'"><span class="btn btn-sm btn-warning">EDIT</span></a></th scope="col">
								<th scope="col"><a href="deleteads.php?id='.$row[0].'"><span class="btn btn-sm btn-danger">DELETE</span></a></th scope="col"></tr>';

			}

			return $result;
		}


		public static function updateAds($dbconn, $input){
			$stmt = $dbconn->prepare("UPDATE ads SET year=:n WHERE partner_id=:stid");

			$data = [
						':n' =>$input['year'],
						':stid' =>$input['id']
					];

			$stmt->execute($data);

		}

		public static function deleteAds($dbconn, $input){
			$stmt = $dbconn->prepare("DELETE FROM ads WHERE ads_id = :sid");
			$stmt->bindParam(":sid", $input);

			$stmt->execute();
		}

		public static function getAdsByID($dbconn, $sf_id){
			$stmt = $dbconn->prepare("SELECT * FROM ads WHERE ads_id=:sid");
			$stmt->bindParam(":sid", $sf_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;
		}

}