<!-- HTML Document -->

<div class="bbn-overlay">
  <bbn-router mode="tabs"
              :autoload="true">
  	<bbn-container :fixed="true"
                   url="list"
                   component="appui-event-list"/>
  	<bbn-container :fixed="true"
                   url="calendar"
                   :scrollable="false"
                   :label="_('Calendar')">
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
