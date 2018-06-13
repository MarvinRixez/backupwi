<?php
	session_start();
	$path = $_SERVER['DOCUMENT_ROOT']."/wimf/code/";
	require_once $path."/conf.inc.php";
	require $path."/script/functions.php";
	include $path."/header.php";
	//if (!$_SESSION['admin']) {
		//header('location:signup.php');
	
 ?>

<div class="container">
	<div class="row">
		<div class="col-md-8 post">
		<title>Panel Admin</title>
          <center><h1>PANEL ADMIN</h1></center>
          <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
			<label for='formTable'>Table à afficher:</label><br>
          <select name="formTable">
          	<option value="">Choix</option>
            <?php
            $arrTables = get_tables("wimf");
     	  	foreach ($arrTables as $key => $tables)
			{
				echo "<option value=".$tables[0].">".$tables[0]."</option>";
			}
			?>
          </select>
          <input type="submit" name="formSubmit" value="Valider" >
          </form>

			<?php
				if(isset($_POST['formSubmit']))
				{
					$varTable = $_POST['formTable'];
					$errorMessage = "";
					if (empty($varTable))
					{
						$errorMessage = "<li>Vous n'avez pas séléctionné de table à afficher</li>";
					}
					if ($errorMessage != "")
					{
						echo("<br><p>Problème avec la sélection de table:</p>\n");
						echo("<ul>".$errorMessage."</ul>\n");
					}
					else
					{
							$arrTables = get_tables("wimf");
     	  					foreach ($arrTables as $key => $tables)
							{
								if ($varTable == $tables[0])
									fill_user($tables[0]);
							}
					}
				}

			function get_content($table)
			{
				$connection = connectDB();
				$query = $connection->query("SELECT * FROM ".$table);
				$results = $query->fetchAll();
				return ($results);
			}

			function get_columns($table)
			{
				$connection = connectDB();
				$query = $connection->query("SHOW COLUMNS FROM ".$table);
				$results = $query->fetchAll();
				return ($results);
			}

			function get_tables($database)
			{
				$connection = connectDB();
				$query = $connection->query("SHOW TABLES FROM ".$database);
				$results = $query->fetchAll();
				return ($results);
			}

			function button()
			{
			   	echo "<td><button>Modifier</button></td>";
				echo "<td><button>Supprimer</button></td>";
			}

			function fill_user($table)
			{
				$results = get_content($table);
				echo "<h3>Table: ".ucfirst($table)."</h3>";
				foreach ($results as $key => $row)
				{
      				 foreach($row as $field => $value)
					 {
           				$arrResult[$field][] = $value;
     				 }
				}
				for ($i = 0; $i < sizeof($arrResult); $i++)
				{
					unset($arrResult[$i]);
				}
				echo "<table class=\"table\"><tr>";
				$columns = get_columns($table);
				foreach ($columns as $key => $field)
				{
					$split = explode("_", $field[0]);
					echo "<th>".ucfirst($split[1])."</th>";
				}
				echo "</tr><tr>";
				$num_rows = mysql_num_rows($arrResult);
				echo "HERE".$num_rows;
				var_dump($arrResult);
				$j = 1;
				$i = 0;
				while ($arrResult[$i])
				{
					echo "<tr>";
					foreach ($arrResult as $row)
					echo "<td>".$row[$i]."</td>";
					echo "</tr>";
					$i++;
				}

				/*foreach ($arrResult as $key)
				{
					 //if ($arrResult[$key] == "user_id")
					 //echo "okay";
					 echo $arrResult[0];
					 /*if ($row)
					 {
						echo "<td>".$row[$key]."</td>";
					}
				}*/
					/*echo "<td>";
					echo $field[0]."\n";
					echo "</td>";*/
        			/*foreach ($field as $key => $cell)
        			{
           				echo "<td>".$cell."</td>";
        			}*/

				echo "</tr></table>";
			}
			?>
	</div>
</div>
<?php require "../footer.php" ?>
