<?php
require_once __DIR__ . '/point.php';
require_once __DIR__ . '/inheritance.php';

//$A = new Point();
////$A->set_x(1024);
////$A->set_y(2048);
//echo "X = {$A->get_x()},\tY = {$A->get_y()};<br>";
////echo $A->y;
//$A->info();

//$B = new Point(2, 3);
////$B->info();
//$B->info();
//echo $B;

/*$human = new Human('Antonio', 'Montana', 25);
echo $human.'<hr>';

$student = new Student('Jessie', 'Pinkman', 25, 'Chemistry', 'WW_220', 95, 98);
echo $student.'<hr>';

$teacher = new Teacher('Walter', 'White', 50, 'Chemistry', 25);
echo $teacher . '<hr>';

$graduate = new Graduate('Hank', 'Schreder', 40, 'Criminalistic', 'OBN', 80, 60, 'How to catch Heisenberg');
echo $graduate;*/

$group =
	[
		new Student('Jessie', 'Pinkman', 25, 'Chemistry', 'WW_220', 95, 98),
		new Teacher('Walter', 'White', 50, 'Chemistry', 25),
		new Graduate('Hank', 'Schreder', 40, 'Criminalistic', 'OBN', 80, 60, 'How to catch Heisenberg'),
		new Student('Tommy', 'Vercetty', 30, 'Theft', 'Vice', 95, 98),
		new Teacher('Ricardo', 'Diaz', 55, 'Weapons distribution', 20)
	];

echo '<pre>';
//echo get_class($group[0]);
//echo get_class($group[1]);
//echo get_class($group[2]);
//echo '<hr>';
//var_dump($group[0]);
//echo '<hr>';
//var_dump($group[1]);
//echo '<hr>';
//var_dump($group[2]);
//echo '<hr>';
echo '</pre>';

echo '<table>';
echo '<tr>';
echo '<th>First name</th><th>Last name</th><th>Age</th><th>Speciality</th><th>Info</th>';
echo '</tr>';
for ($i = 0; $i < count($group); $i++) {
	//echo $group[$i] . '<hr>';
	echo '<tr>';
	echo "<td>{$group[$i]->get_first_name()}</td>";
	echo "<td>{$group[$i]->get_last_name()}</td>";
	echo "<td>{$group[$i]->get_age()}</td>";
	echo "<td>{$group[$i]->get_speciality()}</td>";
	echo '<td>';
	//if (get_class($group[$i]) === 'Student') {
	//	//echo "{$group[$i]->get_group()}, rating:{$group[$i]->get_rating()}, attendance:{$group[$i]->get_attendence()}";
	//	echo $group[$i]->info();
	//}
	//if (get_class($group[$i]) === 'Teacher') {
	//	echo $group[$i]->info();
	//}
	echo $group[$i]->info();
	echo '</td>';
	echo '</tr>';
}
echo '</table>';

?>