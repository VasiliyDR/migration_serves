<?php
require_once 'Colors.php';
require_once __DIR__ . '/../options_mysql.php';
class Mysql {
    private $con;
    private $commit;
    private $files;
    private $colors;
    private $selectMigrations = [];
    private $changeMigFiles = array();
    private $str = "";

    private $file_name_length = 0;
    private $commit_length = 0;
    private $data_length = 0;

    private $arr = array();

    public function __construct() {
        $this->con = mysqli_connect("mysql_db", "root", "root", "db_olliver") or die(mysqli_connect_error());
        mysqli_query($this->con,'SET NAMES "utf8"');
        mysqli_query($this->con,"SET lc_time_names = 'ru_RU';");
        $this->colors = new Colors();
    }

    private function sql($text) {
        $result = mysqli_query($this->con, $text);
        return $result;
    }
    private function selectMigrationsTable() {
        $query = $this->sql("SELECT file_name FROM db_olliver.migrations_table; ");
        if(mysqli_num_rows($query) > 0) {
            while($s = mysqli_fetch_array(($query))){
                array_push($this->selectMigrations, $s["file_name"]);
            }
        }
    }

    

    private function addMigrationTable() {
        #соритруем массив
        asort($this->changeMigFiles);

        foreach ($this->changeMigFiles as $key => $values) {
            
            include_once "./migrations_tables/{$values}";  // подключаем файлы миграции ($values это название файла)
            $query_add_in_table_new_raw_about_migrations = "INSERT INTO db_olliver.migrations_table (file_name, commit) VALUES ('{$values}', '{$commit_migrations}');";  // записали в таблицу какие миграции были         
            // $this->sql($query_1);
            // $this->sql($sql_migrations); // выполняется запрос из файла миграции
            $array_sql_query = explode('|', $sql_migrations);
            // var_dump($array_sql_query);
            // exit;

            mysqli_begin_transaction($this->con);
            try {
                for($i=0;$i<count($array_sql_query); $i++) {
                    mysqli_query($this->con, $array_sql_query[$i]);
                }  
                mysqli_commit($this->con);
                $this->sql($query_add_in_table_new_raw_about_migrations); 
            } catch (mysqli_sql_exception $exception) {
                mysqli_rollback($this->con);
                echo $this->colors->getColoredString("ERROR!!!!!\n", 'white', 'red');
                throw $exception;
            }
        }
    }

    private function filesMigrations() {
        # Получаем название файлов из папки и удаляем файлы '..' и '.' чтобы не мешались!
        $dir = './migrations_tables/';
        $this->files = scandir($dir, SCANDIR_SORT_NONE);
        $this->files = array_diff($this->files, ['..', '.']);
    }
    #меняет число в отрицательное число
    private function neg1($num){
	return $num < 0 ? $num : -1*$num;
    }

    private function dataDBConsole() {
        $q = "SELECT * FROM db_olliver.migrations_table; ";
        $q = $this->sql($q);
        if(mysqli_num_rows($q) > 0) {
            while($s = mysqli_fetch_assoc(($q))){
                $file_name_length = iconv_strlen($s['file_name']);
                $commit_length = mb_strlen($s['commit']);
                $data_length = iconv_strlen($s['file_name']);
                $this->file_name_length = $this->file_name_length <= $file_name_length ? $file_name_length : $this->file_name_length;
                $this->commit_length = $this->commit_length <= $commit_length ? $commit_length : $this->commit_length;
                $this->arr[] = $s;
            }
        }


        $num = $this->file_name_length  - 9;
        $num = ceil($num/2);
        if($num % 2 != 0) {
            $num += 1;
        }
        $num += 1;
        $space_file_name = '';
        for($i=0; $i < $num; $i++) {
            $space_file_name .= ' ';
        }
        $file_name = $space_file_name . "file_name"  . $space_file_name;
        if(mb_strlen($file_name) > ($this->file_name_length + 2)) {
            $res = mb_strlen($file_name) - ($this->file_name_length + 2);
            $file_name = substr($file_name, 0, $this->neg1($res));
        }
        $num2 = $this->commit_length - 6;
        $num2 = ceil($num2 / 2);
        if($num2 % 2 != 0) {
            $num2 += 1;
        }
        $num2 += 1;
        $space_commit = '';
        for($i=0; $i < $num2; $i++) {
            $space_commit .= ' ';
        }
        $commit = $space_commit . 'commit' . $space_commit;
        if(mb_strlen($commit) > ($this->commit_length + 2)) {
            $res = mb_strlen($commit) - ($this->commit_length + 2);
            $commit = substr($commit, 0, $this->neg1($res));
        }
    
        for($i=0;$i < count($this->arr); $i++) {
            
            $n = $this->file_name_length  - mb_strlen($this->arr[$i]['file_name']);

            $n =(int) ceil($n/2);

            
            if($n % 2 != 0) {
                $n += 1;
            } 
                $n += 1;
            
            $space_file_name2 = '';
            for($i1=0; $i1 < $n; $i1++) {
                
                $space_file_name2 .= ' ';
            }
            
            $file_name2 = $space_file_name2 . $this->arr[$i]['file_name']  . $space_file_name2;
            
            if(mb_strlen($file_name2) > ($this->file_name_length + 2)) {
                $res = mb_strlen($file_name2) - ($this->file_name_length + 2);
                $file_name2 = substr($file_name2, 0, $this->neg1($res));
            }

            $n2 = $this->commit_length - mb_strlen($this->arr[$i]['commit']);
            $n2 = ceil($n2/2);
            if($n2 % 2 != 0) {
                $n2 += 1;
            }
            $n2 += 1;
            for($i2=0; $i2 < $n2; $i2++) {
                $space_commit2 .= ' ';
            }

            $commit2 = $space_commit2 . $this->arr[$i]['commit'] . $space_commit2;

            if(mb_strlen($commit2) > ($this->commit_length + 2)) {
                $res = mb_strlen($commit2) - ($this->commit_length + 2);
                $commit2 = substr($commit2, 0, $this->neg1($res));
            }

            $this->str .= "|{$file_name2}|{$commit2}| {$this->arr[$i]['data_create']} |\n";

            $file_name2 = '';
            $commit2 = '';
            $space_commit2 = '';
            $space_file_name2 = '';
            $n2 = 0;
            $n = 0;
        }

        $header = "Миграция прошла успешно\n|{$this->colors->getColoredString($file_name, 'red','purple')}|{$this->colors->getColoredString($commit, 'white','black')}|{$this->colors->getColoredString('     data_create     ', 'green','blue')}|\n";
        echo $header . $this->str;
    }

    public function job(){
        $this->selectMigrationsTable(); // Выводит какие миграции уже есть 
        $this->filesMigrations();  // выводит какие файлы есть для миграции
        $this->changeMigFiles = array_diff($this->files, $this->selectMigrations);  // сохранит в переменную массив с файлами которые надо накатить
        if(count($this->changeMigFiles) == 0) {
            echo $this->colors->getColoredString("Нечего мигрировать!\n", 'white', 'red');
        } else {
            $this->addMigrationTable(); // Добавляется запись в таблицу миграции и выполняет миграцию
            $this->dataDBConsole(); // Выводит данные какие миграции есть 
        }

    }
}

?>
