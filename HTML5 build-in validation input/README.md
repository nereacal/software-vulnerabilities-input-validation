HTML5 holds form controls to allow validating user data input as follows:
- ```required```
- ```minleght``` and ```maxlenght``` (strings)
- ```min``` ànd ```max``` (numerical)
- ```type```
- ```pattern```

CSSs pseudo-classes such as ```:valid``` will apply styles for valid elements and ```:invalid``` or ```:out-of-range``` fot invalid elements. More even, browser will
block the form and display an error message and no submit action will proceed.

The following error messages can be displayed:
- ```badInput```: User is providing input unable to convert by browser.
- ```patternMismatch``` :
- ```rangeOverflow```
- ```rangeUnderflow```
- ```stepMismatch```
- ```tooLong```
- ```tooShort```
- ```typeMismatch```
- ```valueMissing```
- ```customError```
