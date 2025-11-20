<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lyric Remix</title>
    <style>
        body { 
            text-align: center;
            color: #FFFF;
            font-family: Arial, sans-serif; 
            padding: 20px; 
            background-image: url('bg.png');
            background-size: cover;
            
        }
        h1, h2 { 
            color: #d66f5f; 
        }
        .section-title 
        { font-weight: bold;
             margin-top: 20px; 
            }
        p { 
            margin: 5px 0; 
        }
        hr { 
            border: 1px solid #d66f5f;
            margin: 20px 0;
             }
        em { 
            font-style: italic;
         }
      
    </style>
</head>
<body>
    <div class="lyrics-box">
        
    </div>
<?php
//array
$nouns = [ "burnin'", "heat", "fire", "remnants", "love", "stories", "time", "mind", "Clementine", "dream", "depths", "memory"];
$verbs = ["changing", "tame", "savin'", "forget", "met", "throw", "hate", "fall", "fadin'", "waitin'", "find", "growin'", "try", "touch"];
$adjectives = ["gray", "dearest", "old", "ancient", "eternal", "hard"];

//variables
$title = "Clementine";
$artist = "Grent Perez";
$genre = "bittersweet"; 
$verseCount = 3;
$repeatChorus = 2;

// Type juggling e
$typeJuggleExample = "2" + 3;
$typeJuggleText = "Verse " . 1;

// the lyrics
$verse1 = [
    "I've been {$verbs[0]}",             
    "But the {$nouns[0]} stays the same", 
    "What can I do to {$verbs[1]} the {$nouns[1]} of this {$nouns[2]}?",  
    "Forever {$verbs[2]}",                
    "The {$nouns[3]} of a {$nouns[4]}",   
    "Like {$adjectives[3]} {$nouns[5]} told from another {$nouns[6]}",  
    "Eternally painted on my {$nouns[7]}", 
    "Mmm"
];

$chorus = [
    "Color it {$adjectives[0]}",            
    "Until I {$verbs[3]} you",              
    "Like I never {$verbs[4]} you",        
    "My {$adjectives[1]} {$nouns[8]}",     
    "Throw it away",                       
    "But close enough to you",             
    "Cause although I {$verbs[6]} you",    
    "I will still {$verbs[7]} in love, my", 
    "{$nouns[8]}",                        
    "Every time, mmm"
];

$verse2 = [
    "And if you're {$verbs[8]}",             
    "Then honey I'll be {$verbs[8]} too",   
    "Darling, I don't even know who I am without you",
    "Forever {$verbs[9]}",                  
    "Times never wasted and still",
    "I find myself {$verbs[12]} old over you" 
];

$pre_chorus = [
    "You came in a {$nouns[9]}",    
    "You {$verbs[13]} the {$nouns[10]} of my {$nouns[7]}", 
    "Oh, no, no, no"
];

$bridge = [
    "No matter how {$adjectives[5]} I {$verbs[12]}",  
    "My {$nouns[8]}, every time",                      
    "Oh, oh, oh, oh"
];

$outro = [
    "No matter how {$adjectives[5]} I {$verbs[12]}",   
    "My {$nouns[8]}, every time",                      
    "Mmm, mmm",
    "You're always on my {$nouns[11]}"              
];

$totalChorusLines = count($chorus) * $repeatChorus;


function display_section($title, $lines) {
    echo "<div class='section-title'>[$title]</div>"; 
    foreach ($lines as $line) {
        echo "<p>$line</p>"; 
    }
    echo "<br>"; 
}


echo "<h1>$title</h1>";
echo "<h2>by $artist</h2>";
echo "<p><strong>Genre:</strong> $genre</p>";

// Sections
display_section("Verse 1", $verse1);
display_section("Chorus", $chorus);
display_section("Verse 2", $verse2);
display_section("Pre-Chorus", $pre_chorus);
display_section("Chorus", $chorus);
display_section("Bridge", $bridge);
display_section("Chorus", $chorus);
display_section("Outro", $outro);


// total lines
echo "<br><hr>";
echo "<p><strong>Total chorus lines displayed:</strong> $totalChorusLines</p>";

?>
</body>
</html>
