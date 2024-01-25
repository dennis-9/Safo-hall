<?php
    class crud{
        private $db;

        function __construct($conn){
            $this->db = $conn;
        }
        public function insertStudentInfo($firstName,$lastName,$studentId,$category,$level,$programme,$contact,$email,$parentName,$parentContact,$disability,$scholarshipSpecify,$roomNumber){
            try {
                $sql = "INSERT INTO `student_registration_info`(`first_name`, `last_name`, `student_id`, `category`, `programme`, `level`, `email`, `contact`, `parent_name`, `parent_contact`, `physical_challenges`, `scholarship`, `room_number`)
                VALUES (:firstName,:lastName,:studentId,:category,:programme,:level1,:email,:contact,:parentName,:parentContact,:disability,:scholarshipSpecify,:roomNumber)";

                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':firstName',$firstName);
                $stmt->bindparam(':lastName',$lastName);
                $stmt->bindparam(':studentId',$studentId);
                $stmt->bindparam(':category',$category);
                $stmt->bindparam(':programme',$programme);
                $stmt->bindparam(':level1',$level);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':parentName',$parentName);
                $stmt->bindparam(':parentContact',$parentContact);
                $stmt->bindparam(':disability',$disability);
                $stmt->bindparam(':scholarshipSpecify',$scholarshipSpecify);
                $stmt->bindparam(':roomNumber',$roomNumber);

                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }
        public function editStudentDetails($id,$firstName,$lastName,$studentId,$category,$level,$programme,$contact,$email,$parentName,$parentContact,$disability,$scholarshipSpecify,$roomNumber){
            try{
                $sql = "UPDATE `student_registration_info` SET `first_name`=:firstName,`last_name`=:lastName,`student_id`=:studentId,`category`=:category,`programme`=:programme,`level`=:level1,`email`=:email,`contact`=:contact,`parent_name`=:parentName,`parent_contact`=:parentContact,`physical_challenges`=:disability,`scholarship`=:scholarshipSpecify,`room_number`=:roomNumber WHERE id= :id";

                $stmt = $this->db->prepare($sql);
                
                $stmt->bindparam(':id',$id);
                $stmt->bindparam(':firstName',$firstName);
                $stmt->bindparam(':lastName',$lastName);
                $stmt->bindparam(':studentId',$studentId);
                $stmt->bindparam(':category',$category);
                $stmt->bindparam(':programme',$programme);
                $stmt->bindparam(':level1',$level);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':parentName',$parentName);
                $stmt->bindparam(':parentContact',$parentContact);
                $stmt->bindparam(':disability',$disability);
                $stmt->bindparam(':scholarshipSpecify',$scholarshipSpecify);
                $stmt->bindparam(':roomNumber',$roomNumber);
                
                $stmt->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
        public function getStudentInfo(){
            try{
                $sql = 'SELECT * FROM student_registration_info';
                $result = $this->db->query($sql);
                return $result;
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function getRoomDetails(){
            try{
                $sql = 'SELECT * FROM rooms';
                $result = $this->db->query($sql);
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function getSingleStudentDetails($id){
            try{
                $sql = 'SELECT * FROM student_registration_info WHERE id = :id';
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        public function deleteStudentRecord($id){
            try{
                $sql = "DELETE FROM student_registration_info WHERE id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id',$id);
                $stmt->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
    }
?>