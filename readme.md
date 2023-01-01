S.O.D.A.S.
Simple On Demand Automated SQL

By b3tac0d3
Created: December 2022

map 
(M.A.P.)
Meat And Potatoes

- Map directory holds all working classes
- Config file is setup to accept data from any source or can be hard coded
- Will be setup to integrate directly in to Cinque by b3tac0d3

=============================================================
    Config File
=============================================================
    - Config file automatically loaded from ~/src/app/plugins/sodas/config.php
    - Uses constants to define database structure and log files
    - Default log files are located under sodas/logs/
        - Custom log files can be used by change log file path constants
        - If log file doesn't exist but is called, it will be created


=============================================================
    Database Connection (db.php)
=============================================================
    - Loads config file automatically if constants aren't defined

=============================================================
    Queries
=============================================================
    - All functions can be chained
    - Default select is all columns (*)
    - Default return is all rows fetchAll(PDO::FETCH_ASSOC)
