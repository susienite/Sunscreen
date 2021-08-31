# Project 1: Design Journey

Your Name: Susan Tan

**All images must be visible in Markdown Preview. No credit will be provided for images in your repository that are not properly linked in Markdown. Assume all file paths are case sensitive!**

# Project 1, Milestone 1 - Design & Plan

## Website Topic

[Tell us what your website is about. What are you promoting?]

My website will be promoting the use of sunscreens.

## Target Audiences

[Tell us about your two target audiences.]

My target audience are
(1) people who are new to sunscreen
(2) people who want to learn more about sunscreen.

## Design Process

[Document your design process. Show us your sketches. Show us your card sorting. Show us the evolution of your design from your first idea (sketch) to design you wish to implement (sketch). Show us the process you used to organize content and plan the navigation (card sorting).]

[Thoroughly document this process. The _process_ is the important part of this assignment, not the final result.]

![Design_Idea](design_ideas.png)
![Design_card_sorting](card_sorting.png)
![Design_evolution](final_idea.png)

## Final Design Plan

[Include sketches of your final design here. Don't forget to design the form and its confirmation page!]

[Include your site navigation here. Describe the content on each page. Tip: use bulleted lists.]

![Design1](design_final_sketch_1.png)
![Design2](design_final_sketch_2.png)
![Design3](design_final_sketch_3.png)

## Target Audiences' Needs

[Tell us how your design meets the needs of both of your target audiences.]

My design will explain what sunscreen is to people who are new to sunscreen
and provide more information on sunscreen for people who already know about it.
(1) introduce what sunscreen is and what it is used for
(2) provide information about specifics of sunscreen, such as the spf value

## Templates

[Now that you've finalized your design, identify the templates you will use on your site.]

PHP include() for
(1) header
(2) footer


# Project 1, Milestone 2 - Draft Website

## Sticky Form

[What fields are required for your form?]

My form asks what skin type does a person have, so the fields are oily, normal, and dry.
I want to implement a radio form.
This sticky form has changed to person's name, their sunscreen's spf value, and
whether he/she use sunscreen (yes, no, sometimes).

[Plan out your error messages for your target audiences here.]

"Your input is invalid. Please provide a correct input."

## Validation Code Plan

[Write out your pseudocode plan for handling the validation of the form.]

```php
if isset($_POST['submit']) {
  //check if form has been has been submitted
  if (// Is it is a valid form? Is the form not null and have all the conditions been met? )
    $valid = true;
  } else {
    $valid = false;
    //show error message
} else  { //form has not been submitted
  //how the form show look like before submission (HTML and PHP)
}
```


# Final Submission: Complete & Polished Website

## Target Audiences

[Tell us how your final site meets the needs of the target audiences. Be specific here. Tell us how you tailored your design, content, etc. to make your website usable by both target audiences.]

My site is on sunscreen. My target audience is (1) people who are new to suncreen and (2) people who want to learn
more about sunscreen. I have included a introduction to sunscreen under the page, "Motive", which explains what is
sunscreen and why we should be using it. The "Application" page is for people new to sunscreen and want to learn how to use it. I have also included a "SPF" page, which eluciates what sunscreen does to people who already use sunscreen. This page explains what the SPF number stands for and how long sunscreen actually protects our skin. I have included a sticky form, so people can learn more about their individual sunscreen. The "Home" page introduces all the pages with pictures and links!

## Reflection

[Take this time to reflect on what you learned during this assignment. How have you improved from 1300? What things did you have trouble with?]

In this assignment, I learned how to make php variables and call them in HTML and CSS. These variables enables us to indicate current page and make a form sticky. I also learned how to use loops, so I can condense a list into a few lines of code. I never took 1300 but I took Python. So, the learning curve was higher because I had to learn HTML and CSS syntax while doing this assignment. CSS took a long time to do because I had a vision of what I want my website to look like and I initially didn't know any CSS syntax. But having taken Python, I had an understanding of variables and loops. CSS defintely took the most time. PS. what is card sorting?
