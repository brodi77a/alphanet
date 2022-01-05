<!DOCTYPE html> 

<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="description" content="">
        <meta property="og:image" content="">

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <h1>AlphaN3t</h1>

        <student-cards>
            <!-- //include php here for student card -->
            <inner-column>


                <?php 
    function studentMaker($name, $intro, $link) {
        $student = [
            name => "$name",
            intro => "$intro",
            link => "$link"
        ];
        return $student;
    }

    $budi = studentMaker(
            "Budi Zainudin",
            "Hello there!",
            "this is my link!");

    $shayne = studentMaker(
            "Shayne",
            "I am a Ph.D. candidate in African American Studies as well as a web designer. 
             I believe websites are the most powerful mediums of communication oout today, 
             and we have a responsility to make them create them in ways that will leave 
             an indelible positive impact on the world",
            "https://peprojects.dev/alpha-3/shayne");

    $josh = studentMaker(
            "Josh",
            "Josh's Stuff",
            "https://peprojects.dev/alpha-3/josh");

    $wytonya = studentMaker(
            "Wytonya Moore",
            "Wytonya's Stuff",
            "https://peprojects.dev/alpha-3/wytonya");

    $tara = studentMaker(
            "Tare-uhhhhhh",
            "An aspiring web developer and programming enthusiast. On this journey to a new career,
             I'm collecting experience and inspiration. Come join me and see what I've got so far!",
             "https://peprojects.dev/alpha-3/tara");
    
    $andrew = studentMaker(
            "Andrew",
            "Aspiring web developer who loves working with cimputers and technology.
             Let's see what we can do together.",
            "https://peprojects.dev/alpha-3/andrew");
    
    $jose  = studentMaker(
            "Jose",
            "The sketchiest dude on the W E B",
            "https://peprojects.dev/alpha-3/jose");
    
    $brian = studentMaker(
            "Brian Lowery",
            "Check out my projects and case studies 👨‍💻️",
            "https://peprojects.dev/alpha-3/bdlowery");

    $saul = studentMaker(
            "Saul Sifuentes",
            "Saul's Stuff",
            "https://peprojects.dev/alpha-3/saul");
        
    $derek  = studentMaker(
            "🤠 sheriff-derek",
            "Someone's got to design this town.",
            "https://peprojects.dev/alpha-3/sheriff");
        
    $natasha = studentMaker(
            "Natasha Morrison",
            "Natasha's Stuff",
            "https://peprojects.dev/alpha-3/natmorrison");
    
    

    $students = [$budi, $wytonya, $derek, $saul, $natasha, $tara, $josh, $shayne, $jose, $andrew, $brian];
    
?>

<?php foreach ($students as $student) {?>

    <student> 
        
        <header>
            <h2><?=$student["name"]?></h2>
        </header> 
                    
    
        <div class="copy-group <?=$student['name']?>">
            <a href="<?=$student["link"]?>">Link to Website</a>
            <p class="intro"><?=$student["intro"]?></p>
        </div>
                    
    
    </student>

<?php }?>
            </inner-column>
            
        </student-cards>
    </body>
</html>