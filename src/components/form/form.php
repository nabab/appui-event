<!-- HTML Document -->

<bbn-form :action="currentAction"
          :source="formData"
          @success="onSuccess">
	<div class="bbn-grid-fields bbn-c bbn-padded">
    <label><?= _("Name of the event") ?></label>
    <div>
      <bbn-input v-model="formData.name"
                 :required="true"/>
    </div>

    <label v-if="types && changeType"><?= _("Type of event") ?></label>
    <div v-if="types && changeType">
      <bbn-dropdown v-model="formData.id_type"
                    :source="types"
                    :required="true"/>
    </div>

    <label v-if="changeMode"><?= _("Privacy") ?></label>
    <div v-if="changeMode">
      <bbn-radio :source="modes"
                 v-model="currentMode"/>
    </div>

    <div class="bbn-grid-full bbn-c bbn-i">
      <?= _("The event will be available for") ?>
    </div>

    <div v-if="currentMode === 'public'"
         class="bbn-grid-full bbn-c bbn-b">
      <?= _("Everyone") ?>
    </div>

    <label v-if="currentMode === 'group'"
           class="bbn-b">
      <?= _("The group") ?>
    </label>
    <div v-if="changeGroup && (currentMode === 'group')">
      <bbn-dropdown v-model="formData.id_group"
                    :source="groups"
                    :required="true"/>
    </div>

    <div v-if="currentMode === 'private'"
         class="bbn-grid-full bbn-c bbn-b">
      <?= _("You") ?>
    </div>

    <label><?= _("Start") ?></label>
    <div>
      <bbn-datetimepicker v-model="formData.start"
                          :required="true"/>
    </div>

    <label><?= _("End") ?></label>
    <div>
      <bbn-datetimepicker v-model="formData.end"
                          :nullable="true"/>
    </div>

    <label v-if="recurring"><?= _("Recurrence") ?></label>
    <div v-if="recurring">
      <bbn-dropdown v-model="formData.recurring"/>
    </div>

  </div>
</bbn-form>