## CONTRIBUTION GUIDELINES
Contributions are welcome and will be fully credited.

We accept contributions via pull requests on Github. Please review these guidelines before continuing.

## Guidelines

Please follow the PSR-2 Coding Style Guide, enforced by StyleCI.
Ensure that the current tests pass, and if you've added something new, add the tests where relevant.
Send a coherent commit history, making sure each individual commit in your pull request is meaningful.
You may need to rebase to avoid merge conflicts.
If you are changing or adding to the behaviour or public api, you may need to update the docs.
Please remember that we follow SemVer.

## 1 - Commenting & Documentation
IDE's (Integrated Development Environment) have come a long way in the past few years. This made commenting your code more useful than ever. Following certain standards in your comments allows IDE's and other tools to utilize them in different ways.

## 2 - Consistent Indentation
I assume you already know that you should indent your code. However, it's also worth noting that it is a good idea to keep your indentation style consistent.

There are more than one way of indenting code.

Style 1:

function foo() {
    if ($maybe) {
        do_it_now();
        again();
    } else {
        abort_mission();
    }
    finalize();
}
Style 2:

function foo()
{
    if ($maybe)
    {
        do_it_now();
        again();
    }
    else
    {
        abort_mission();
    }
    finalize();
}
Style 3:

function foo()
{   if ($maybe)
    {   do_it_now();
        again();
    }
    else
    {   abort_mission();
    }
    finalize();
}
I used to code in style #2 but recently switched to #1. But that is only a matter of preference. There is no "best" style that everyone should be following. Actually, the best style, is a consistent style. If you are part of a team or if you are contributing code to a project, you should follow the existing style that is being used in that project.

The indentation styles are not always completely distinct from one another. Sometimes, they mix different rules. For example, in PEAR Coding Standards, the opening bracket "{" goes on the same line as control structures, but they go to the next line after function definitions.

PEAR Style:

function foo()
{                     // placed on the next line
    if ($maybe) {     // placed on the same line
        do_it_now();
        again();
    } else {
        abort_mission();
    }
    finalize();
    
## 3 - Avoid Obvious Comments
Commenting your code is fantastic; however, it can be overdone or just be plain redundant. Take this example:


// get the country code
$country_code = get_country_code($_SERVER['REMOTE_ADDR']);
 
// if country code is US
if ($country_code == 'US') {
 
    // display the form input for state
    echo form_input_state();
}
When the text is that obvious, it's really not productive to repeat it within comments.

If you must comment on that code, you can simply combine it to a single line instead:


// display state selection for US users
$country_code = get_country_code($_SERVER['REMOTE_ADDR']);
if ($country_code == 'US') {
    echo form_input_state();
}

## 4 - Avoid Deep Nesting
Too many levels of nesting can make code harder to read and follow.


function do_stuff() {
 
// ...
 
    if (is_writable($folder)) {
 
        if ($fp = fopen($file_path,'w')) {
 
            if ($stuff = get_some_stuff()) {
 
                if (fwrite($fp,$stuff)) {
 
                    // ...
 
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}
For the sake of readability, it is usually possible to make changes to your code to reduce the level of nesting:


function do_stuff() {
 
// ...
 
    if (!is_writable($folder)) {
        return false;
    }
 
    if (!$fp = fopen($file_path,'w')) {
        return false;
    }
 
    if (!$stuff = get_some_stuff()) {
        return false;
    }
 
    if (fwrite($fp,$stuff)) {
        // ...
    } else {
        return false;
    }
}

## 5 - File and Folder Organization 
For this please check the Laravel documantation
