[Reviewed on 5th April 2011]
[Reviewed by Sam Phippen <samphippen@googlemail.com>]
[Reviewed by Alistair Lynn <arplynn@gmail.com>]

[Docstrings]
* Added docstring to entire class
* Added docstring to private username member
* Added docstring to constructor
* Improved docstring on public method saveTeamName(). Documents what the
  function does in some detail, including how it interacts with TeamNameStrategy
* Improved docstring on public methodgetBlogFeeds() based on looking into pete's
  code, this needs review by him
* Added docstrings to broken out methods from setFeedStatus()
* Improved docstrings to setFeedStatus

[Formatting]
* Aligned whitespace in command installations in constructor
* 80 column width in file

[Code Sanity]
* Make private method ensureAuthed() not return the AuthBackend. The phrase
  ensureAuthed does not imply that you're going to get any related information
  back
* Replace an instance of "setOuptut" with "setOutput" in public method
  setFeedStatus()


[Public Method: setFeedStatus]
* Restructure control flow to make failure case at end of file and not have
  an early return by use of a conditional
* Broke setting of status flags into it's own private static method
  "updateFeedStatusFlagsByStatusString"
* Realised all array processing logic was unnecessary due to php passing
  objects by reference. Feed List update now performed by updating the feed 
  object and rewriting the feed list to the feed file. Broken into rewriteMasterFeedsList()
