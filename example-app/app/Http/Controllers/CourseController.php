<?php 

/* You can use namespace to avoid name collisions between code you create, 
* and internal PHP classes/functions/constants or third-party classes/functions/constants
*/

namespace App\Http\Controllers; 

class CourseController extends Controller {
  public function index() {
    return view('course.list');
  }

  public function detail($id) {
    return view('course.detail', [
      'course_id' => $id
    ]); 
  }
}

?>
