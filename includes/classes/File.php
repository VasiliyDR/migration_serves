<?php
date_default_timezone_set('Europe/Moscow');
#создаёт файл с запросом и коммитом
final class File{
    final public function createFileMigration($name_file, $query, $commit) {
        $date = date('d_m_Y_his');
        $fp = fopen( "./migrations_tables/" . $date . '_' . $name_file . '.php', "w");//поэтому используем режим 'w'
    
        $inner_file = <<< PHP
        <?php
        \$sql_migrations = '$query';
        \$commit_migrations = '$commit';
        ?>
        PHP;
        // записываем данные в открытый файл
        fwrite($fp, $inner_file );
        //не забываем закрыть файл, это ВАЖНО
        fclose($fp);
    }
}
?>