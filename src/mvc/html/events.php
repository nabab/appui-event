<!-- HTML Document -->

<div class="bbn-overlay">
  <bbn-router :nav="true"
              :autoload="true">
  	<bbn-container :fixed="true"
                   :label="_('List')"
                   url="list">
    	<bbn-table :source="source.root + 'data/list'"
                 :url="source.root + 'actions'"
                 :filterable="true"
                 :sortable="true"
                 :pageable="true"
                 :toolbar="['insert']"
                 editable="popup"
                 :search="true"
                 editor="appui-event-form"
                 :editor-options="{types: source.types}">
        <bbns-column field="id"
                     label="<?= _("ID") ?>"
                     :hidden="true"
                     :editable="false"
                     :min-width="150"/>
        <bbns-column field="id_type"
                     label="<?= _("Type") ?>"
                     :min-width="150"
                     :required="true"
                     :source="source.types"/>
        <bbns-column field="name"
                     label="<?= _("Name") ?>"
                     :min-width="100"/>
        <bbns-column field="start"
                     label="<?= _("Start") ?>"
                     :required="true"
                     :width="120"
                     type="date"/>
        <bbns-column field="end"
                     label="<?= _("End") ?>"
                     :width="120"
                     type="date"/>
        <bbns-column :buttons="['edit', 'delete']"
                     :width="70"
                     cls="bbn-c"
                     label="<?= _("Actions") ?>"
                     :notext="true"/>
      </bbn-table>
    </bbn-container>
  	<bbn-container :fixed="true"
                   url="calendar"
                   :scrollable="false"
                   :label="_('Calendar')">
      <bbn-calendar></bbn-calendar>
    </bbn-container>
  </bbn-router>
</div>
