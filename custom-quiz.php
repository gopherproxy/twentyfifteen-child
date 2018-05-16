<?php
/* Template Name: Quiz site template */
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="entry-content">
		<h2 id="question"></h2>
<p id="0"></p>
<p id="1"></p>
<p id="2"></p>

  
<script type="text/javascript">
	
	var score = 0; // GLOBAL variable: Initial score is 0
	var counter = 0;
	var question = document.getElementById('question');
	var answer1 = document.getElementById('0');
	var answer2 = document.getElementById('1');
	var answer3 = document.getElementById('2');
	
	answer1.addEventListener('click', function () {checkAnswer(counter, this.id)});
	answer2.addEventListener('click', function () {checkAnswer(counter, this.id)});
	answer3.addEventListener('click', function () {checkAnswer(counter, this.id)});
	
	// "3 dimensional" array
	var questions = [	
		// Format: [Question], [Possible answers], [Correct answer - array index!]
		[['How many moons does Earth have?'],[1, 2, 3], [0]],					 
		[['How many moons does Saturn have?'],[29, 30, 31] ,[2]],
		];
	
	console.log(questions[0][0]);
	/*// loop through the array of questions and call the function askQuestion taking array members as argument
	for (var i=0; i<questions.length; i++) {
	askQuestion(questions[i]);
	};*/
	
	//function for asking question, passing on the array item as "question"
	function askQuestion(c) {
	
		question.innerHTML = questions[c][0];
		answer1.innerHTML = questions[c][1][0];
		answer2.innerHTML = questions[c][1][1];
		answer3.innerHTML = questions[c][1][2];
		
	}  
	
	function checkAnswer(c, id){
		
		let correct = questions[c][2];
		console.log(correct);
		
		if (id == correct){
			alert('Correct!');
		} else {
			alert('Sorry, the correct answer was ' + questions[c][1][correct] );
		}
		
		if (counter < questions.length-1){
			counter++;
		};
		
		askQuestion(counter);
	}

askQuestion(counter);
		
</script>
</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
