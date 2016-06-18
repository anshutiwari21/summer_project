
#search {
    position: relative;
    float: left;
    width: 60px;
    height: 60px;
    margin-left: -60px;
}
#label {
    width: 60px;
    height: 60px;
    position: relative;
    z-index: 20;
}
#label label {
    display: block;
    width: 60px;
    height: 60px;
       margin-top: 14.5px;
    margin-left: 30px;
background:url('<?php echo "img/search.png" ?>') 0 0;
background-repeat: no-repeat;
    font-size: 0;
    color: rgba(0, 0, 0, 0);
    text-indent: -9999px;
    cursor: pointer;
}
#label label:hover {
background:url('<?php echo "img/search.png" ?>') 0px 0;
    margin-top: 14.5px;
    margin-left: 30px;
    background-repeat: no-repeat;

}
#label.active label {
background:url('<?php echo "img/search.png" ?>') 0px 0;        margin-top: 14.5px;
    margin-left: 30px;
background-repeat: no-repeat;
}
#input {
    position: absolute;
    top: 0;
    margin-top: 10px;
    left: 60px;
    width: 750px;
    height: 40px;
    z-index: 5;
    overflow: hidden;
}
#input input {
    display: block;
    position: absolute;
    top: 0;
    left: -750px;
    width: 750px;
    height: 100%;
    margin: 0;
    padding: 0 10px;
    border: none;
    background-color:white;
    color:black;
    font-size: 16px;
    -webkit-backface-visibility: none;
    -moz-backface-visibility: none;
    -ms-backface-visibility: none;
    backface-visibility: none;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    -webkit-transition: left 0;
    -moz-transition: left 0;
    -ms-transition: left 0;
    -o-transition: left 0;
    transition: left 0;
}
#input input:focus {
    outline: none
}
#input.focus {
    z-index: 20
}
#input.focus input {
    left: 0;
    
    -webkit-transition: left 0.4s;
    -moz-transition: left 0.4s;
    -ms-transition: left 0.4s;
    -o-transition: left 0.4s;
    transition: left 0.4s;
}