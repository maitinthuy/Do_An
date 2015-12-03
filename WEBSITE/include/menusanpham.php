 <?php
			$danhmuc = $b->select("select * from danhmucsanpham");
            foreach($danhmuc as $dm)
            {
                ?><li>
                  <a href="index.php?mod=sanpham&iddm=<?php echo $r["idTen"];?>"><?php echo $r["TenDanhMuc"];?> </a>
                </li><?php
            }
            ?>
                