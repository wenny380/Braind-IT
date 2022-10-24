<?php 

$articleText="The article presents the concept of Aspect-Oriented
            Programming as a promising area of research in programming 
            languages and software engineering. The author explains the
            need to work with abstractions when building complex systems by pointing 
            out the problems that can be faced when building such systems with the
            traditional style of modularity. Then he describes how Aspect-Oriented Programming, 
            a new programming paradigm, works. In the article they gave an example of the use 
            of this new paradigm in a project where ASP was used to handle a representative 
            class of distributed applications. The article can be useful for professionals 
            and students in the technical field.";


$articleLink="http://localhost/zadanye1_text.php?articleText= $articleText";   //we transmit the link with the variable that containsthe full text



$max =200;
$lastword='';
if (strlen($articleText) > $max)                          //Cut the text to 200 characters and add "..."
{
    $offset = ($max - 3) - strlen($articleText);
    $articlePreview = substr($articleText, 0, strrpos($articleText, ' ', $offset)) . '...';
}


$split = explode(" ", $articlePreview);
for ($i=-3; $i<=-1; $i++)                   //Get the three last word of the preview 
{
    $lastword .=$split[count($split)+ $i];    
    $lastword .=" ";
}

$lastword= rtrim($lastword);   // remove the space at the end of the string 

echo str_replace($lastword, "<a href=\"{$articleLink}\">{$lastword}</a>", $articlePreview);   //Put the article link in the last three words


//Существует максимальное количество символов, которое может быть передано в URL. 
//Если наша статья слишком велика, мы можем не получить всю статью на следующей странице.

?>