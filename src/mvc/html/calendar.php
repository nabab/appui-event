<!-- HTML Document -->

<div class="bbn-overlay">
  <bbn-router :nav="true"
              :autoload="true">
  	<bbn-container :static="true"
                   url="list"
                   component="appui-event-list"/>
  	<bbn-container :static="true"
                   url="calendar"
                   :scrollable="false"
                   :title="_('Calendar')">
      <bbn-calendar></bbn-calendar>
    </bbn-container>
  </bbn-router>
</div> bbn-flex-height">
  <div class="bbn-w-100">
    <bbn-toolbar>
    	<div>
        Here is a toolbar
      </div>
    </bbn-toolbar>
  </div>
  <div class="bbn-flex-fill">
  </div>
</div>
