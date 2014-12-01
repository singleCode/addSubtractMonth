<?php
class tweakMonth{
	public function addSubtractMonth($date,$number){
		$date = new DateTime($date);
#explode date
		list($y, $m, $d) = explode('-', $date->format('Y-m-d'));
		if($number > 0){
			$m += $number;
			while ($m > 12) {
				$m -= 12;
				$y++;
			}
		}else{
			$m -=$number;
			while ($m < 1) {
				$m += 12;
				$y--;
			}
		}
		$last = date('t', strtotime("$y-$m-1"));
		if($l=='1' or $last < $d){
			$day = $last;
		}else{
			$day = $d;
		}
#Set tanggal setelah modifikasi
		$date->setDate($y, $m, $day);
		return $date->format('Y-m-d');
	}
}
?>
