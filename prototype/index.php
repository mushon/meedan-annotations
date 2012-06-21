
<html>
  <head>
    <link href="/stylesheets/styles.css" media="screen, projection" rel="stylesheet" type="text/css" />
  </head>
  
<body>
  <div id="add" class="container">
    <a href="#" class="close">close</a>
    
    <header>
      <h1>Add to Checkdesk</h1>
      <a href="#" title="go to User Name's page on Checkdesk"><img src="#" alt="user-name"> User Name</a>
    </header>
    
    <form>
      <div class="main">
        
          <div class="form-title">
            <label>Title</label>
            <input type="text" placeholder="Type something…">
            <span class="url">http://site.com/permalink/</span>
          </div>
          
          <div class="excerpt">
                <label for="description" class="control-label">Description</label>
                  <textarea rows="3" id="description" class="input-xlarge">Preselected text</textarea>
        </div>
        
        <div class="img-excerpt">
                <ul>
                  <li><img src="#" alt="extracted image"></li>
                  <li><img src="#" alt="extracted image"></li>
                  <li><img src="#" alt="extracted image"></li>
                  <li><img src="#" alt="extracted image"></li>
                </ul>
                <span>1/12</span>
                <a href="#" class="prev">previous image</a>
                <a href="#" class="next">next image</a>
              </div>
              
              <div class="tags">
                <input placeholder="tags, comma seperated" type="text" data-source="[&quot;existing tag&quot;, &quot;existing tag&quot;, &quot;existing tag&quot;, &quot;existing tag&quot;, &quot;existing tag&quot;]" data-items="4" data-provide="typeahead">
              </div>
              
              <div class="custom-data">
                <label class="checkbox" id="source">
              <input type="checkbox"> Source
            </label>
                <label class="checkbox" id="verified">
              <input type="checkbox"> Verified
            </label>
            
            <div class="extra-data">
              <button class="btn btn-danger" data-toggle="collapse" data-target="#more">
                tell me more…
              </button>
     
              <div id="more" class="collapse in">
                    <label class="checkbox" id="gentirified">
                  <input type="checkbox"> Gentrified
                </label>
                    <label class="checkbox" id="terrified">
                  <input type="checkbox"> Terrified
                </label>
            </div>
            </div><!-- /.extra-data -->
            
              </div><!-- /.custom-data -->
      </div><!-- /.main -->
          
        <div class="submit">
          <div class"multilevel">
            <button type="submit" class="add">Add</button>
            <button type="submit" class="discuss">+ Discuss</button>
          </div>
          <a href="#" class="btn minor cancel">Cancel</a>
        </div>
          
      </form>
  </div><!-- /#add -->
  
  <div id="discuss" class="container">
    <a href="#" class="close">close</a>
    
    <header>
      <h1>Added! Now Share!</h1>
      <a href="#" title="go to User Name's page on Checkdesk"><img src="#" alt="user-name"> User Name</a>
    </header>
    
    <form>
      
      <ul class"nav nav-tabs">
        <li class="active"><a href="#on-Checkdesk" data-toggle="tab">On Checkdesk</a></li>
        <li><a href="#on-fb" data-toggle="tab">On Facebook</a></li>
        <li><a href="#on-twitter" data-toggle="tab">On Twitter</a></li>
        <li class="dropable">
          <a href="#">Other</a>
          <ul class="dropdown">
            <li class=""><a href="#on-pinterest">On Pinterest</a></li>
            <li class=""><a href="#on-delicious">On Delicious</a></li>
            <li class=""><a href="#by-email">By email</a></li>
          </ul>
        </li>       
      </ul>
      
      <div class="tab-content">
        <div id="on-Checkdesk" class="tab-pane active">
            
          <select id="choose-discussion">
            <option value="conv-new">Add new conversation</option>
            <option value="conv-013">Conversation Title</option>
            <option value="conv-012">Conversation Title</option>
            …
            <option value="conv-001">Conversation Title</option>
          </select>
            
            <div class="comment">
                  <label for="comment" class="control-label">Your Comment</label>
                    <textarea rows="3" placeholder="add your comment"></textarea>
          </div>
          
          <div class="url-excerpt">
                  <img src="#" alt="extracted image">
                  <span class="verified">verified</span>
                  <div>
                    <h3>Bookmark title</h3>
                    <p>Bookmark excerpt</p>
                  </div>
                </div>
        </div><!-- /#on-Checkdesk -->
        
        <div class="tab-pane" id="on-fb">...</div>
        
        <div class="tab-pane" id="on-twitter">...</div>
        
        <div class="tab-pane" id="on-pinterest">...</div>
        
        <div class="tab-pane" id="on-delicious">...</div>
        
        <div class="tab-pane" id="by-email">...</div>
      
      </div><!-- /.tab-content -->
          
        <div class="submit">
          <span class="uneditable-input shorturl">http://cd.sk/1234</span>
          <button type="submit" class="share">Share</button>
          <a href="#" class="btn minor cancel">Cancel</a>
        </div>
          
      </form>
  </div><!-- /#discuss -->
    
</body>
</html>