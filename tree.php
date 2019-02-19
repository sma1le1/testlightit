<?php
            $toy = 0;
            $n = $_POST['name'];
            if($n < 2 || $n > 20)
            {
                echo "Количество не может быть больше 20 или меньше 2";
                exit(1);
            }
            $m = $n * 2;
            for($i = 0; $i < $n; $i++)
            {
                $toy = rand($n-$i,$n+$i);
                echo '<br>';
                for($j = 1; $j < $m; $j++)
                {
                    if($i % 2 == 0)
                    {
                        if ($j <= $n - $i - 1 || $j >= $n + $i + 1)
                        {
                            echo "_";
                        }
                        if ($j > $n - $i - 1 && $j < $n + $i + 1 )
                        {
                            echo "*";
                        }
                    }
                    if($i % 2 != 0)
                    {
                        if ($j <= $n - $i - 1 || $j >= $n + $i + 1)
                        {
                            echo "_";
                        }
                        if ($j > $n - $i - 1 && $j < $n + $i + 1 && $j != $toy)
                        {
                            echo "*";
                        }
                        if ($j == $toy)
                        {
                            echo "0";
                        }
                    }
                    
                }
            }
            echo '<br>';
?>
<input type="button" name="toMain" value="Поменять высоту" onclick="window.location='http://test/index.html';"/>