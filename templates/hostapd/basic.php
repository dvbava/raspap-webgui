<div class="tab-pane active" id="basic">
  <h4 class="mt-3"><?php echo _("Basic settings") ;?></h4>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="cbxinterface"><?php echo _("Interface") ;?></label>
      <?php SelectorOptions('interface', $interfaces, $arrConfig['interface'], 'cbxinterface', 'getChannel'); ?>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6" required>
      <label for="txtssid"><?php echo _("SSID"); ?></label>
      <input type="text" id="txtssid" class="form-control" name="ssid" value="<?php echo htmlspecialchars($arrConfig['ssid'], ENT_QUOTES); ?>" required />
      <div class="invalid-feedback">
        <?php echo _("Please provide a valid SSID."); ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="cbxhwmode"><?php echo _("Wireless Mode") ;?></label>
      <?php getTooltip(null, 'tiphwmode', true); ?>
      <?php SelectorOptions('hw_mode', $arr80211Standard, $selectedHwMode, 'cbxhwmode', 'getChannel'); ?>
      <div id="hwmode" data-tooltip="<?php echo _("The 802.11ac 5 GHz option is disabled until a compatible wireless regulatory domain is set."); ?>"></div>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="cbxchannel"><?php echo _("Channel"); ?></label>
      <?php
      $selectablechannels = Array();
      SelectorOptions('channel', $selectablechannels, intval($arrConfig['channel']), 'cbxchannel'); ?>
    </div>
  </div>
</div><!-- /.tab-pane | basic tab -->
