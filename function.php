class tweakMonth{
		public function addSubtractMonth($din,$number){
			$date = new DateTime($din);
			#explode date
			list($y, $m, $d) = explode('-', $date->format('Y-m-d'));

			if($number > 0){
				$m += $number;
				while ($m > 12) {
					$m -= 12;
					$y++;
				}
				!dd($m);
			}else{

				$m +=$number;
				while ($m < 1) {
					$m += 12;
					$y--;
				}
			}
			$last = date('t', strtotime("$y-$m-1"));
			if($din =$last or $last < $d){
				$day = $last;
			}else{
				$day = $d;
			}
		
			$date->setDate($y, $m, $day);
			return $date->format('Y-m-d');
		}
	}
