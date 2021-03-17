    <?php
    // regular Expressions 

    //Book 
    //mastering regular expressions
    //http://rexegg.com/

    // \w(3)
    //[a-z][a-z][a-z] pattern

    // PCRE Perl compatible regular 

    // Literal characters

    //delimeters

    /**
     * Meta Character 
     * \ . * + - {} [] ^ $ | ? () : ! = 
     * 
     * Wild card . 
     * 
     */

    //1 
    //$pattern = '/man/';
    // $str = 'The man want to his home early man the man';

    //Wild card .
    // $pattern = '/h.t/';
    // $str = 'Hot , hat , hit ,hit ,h$t'; 
    $pattern = '/1\.26/';
    $str = '20.2 , 1.26 ,1.25 , 1.26 , 20 , 2.26 ,1.26';

    //var_dump(preg_match($pattern, $str, $match));
    preg_match_all($pattern, $str, $match);
    var_dump($match);
