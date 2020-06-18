<?php 


function array_get($array,$key,$default=null)
{
    
    if(array_key_exists($key, $array))
    {
        return $array[$key];
    }
    else 
    {
        return $default;
    }
}



// active link for anchor
function activeLink($active,$link)
{
    if($active == $link)
    {
        echo "active";
    }
    else 
    {
        echo "";
    }
}



// type counter when loop  throgh data 
function type_count()
{
    static $count=1;
    echo $count;
    $count++;

}


// sessions 

function session()
{
    return new \Core\Session;
}


// selected value at select box
function selectedOtion($cat,$row)
{
    if($cat==$row)
    {
        echo  "selected";
    }
    else
    {
        echo "";
    }
}


// get old val from request and put it in the input value

function old($val)
{
    global $success;
    if(isset($_REQUEST[$val]))
    {
        if($success)
        {
            echo '';
        }
        else 
        {
            echo $_REQUEST[$val];
        }
        
    }
    else 
    {
        echo '';
    }
}