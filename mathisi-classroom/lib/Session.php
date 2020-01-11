<?php
	/**
	* Session Class
	*/
	class Session {
		public static function init(){
			session_start();
		}

		public static function set($key, $val){
			$_SESSION[$key] = $val;
		}

		public static function get($key){
			if(isset($_SESSION[$key])) {
				return $_SESSION[$key];
			} 
			else {
				return false;
			}
		}

		public static function checkTeacherSession(){
			self::init();
			if(self::get("teacherLogin") == false) {
				self::destroy();
				//header("Location:../teacher-login.php");
				echo "<script>window.location = '../teacher-login.php'; </script>";
			}
		}

		public static function checkTeacherLogin(){
			self::init();
			if(self::get("teacherLogin") == true) {
				//header("Location:teachers/teachers-dashboard.php");
				echo "<script>window.location = 'teachers/teachers-dashboard.php'; </script>";
			}
		}

		public static function checkStudentSession(){
			self::init();
			if(self::get("studentLogin") == false) {
				self::destroy();
				//header("Location:student-login.php");
				echo "<script>window.location = '../student-login.php'; </script>";				
			}
		}

		public static function checkStudentLogin(){
			self::init();
			if(self::get("studentLogin") == true) {
				////header("Location:classroom.php");
				echo "<script>window.location = 'students/student-dashboard.php'; </script>";

			}
		}

		public static function destroy() {
			session_destroy();
			//header("Location:index.php");
			echo "<script>window.location = '../index.html'; </script>";
		}
	}

?>