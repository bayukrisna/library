<div class="box">
  <div class="col-md-12">
<table class="table table-striped permissions">
          <thead>
            <tr class="permissions-row">
              <th class="col-md-5"><span class="line"></span>Permission</th>
              <th class="col-md-1"><span class="line"></span>Grant</th>
              <th class="col-md-1"><span class="line"></span>Deny</th>
              <th class="col-md-1"><span class="line"></span>Inherit</th>
            </tr>
          </thead>
                                      <tbody class="permissions-group">
                              <tr class="header-row permissions-row">
                  <td class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Determines whether the user has full access to all aspects of the admin. This setting overrides any more specific permissions throughout the system. "
                  >
                    <h4>Global: Super User</h4>
                  </td>
                  <td class="col-md-1 permissions-item">
                                              <input value="1" name="permission[superuser]" type="radio">
                       
                    </td>
                    <td class="col-md-1 permissions-item">
                                                    <input value="-1" name="permission[superuser]" type="radio">
                        
                    </td>
                    <td class="col-md-1 permissions-item">
                                                    <input value="0" checked="checked" name="permission[superuser]" type="radio">
                                            </td>
                  </tr>
                </tbody>
                                                  <tbody class="permissions-group">
                              <tr class="header-row permissions-row">
                  <td class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Determines whether the user has access to most aspects of the admin. "
                  >
                    <h4>Admin: </h4>
                  </td>
                  <td class="col-md-1 permissions-item">
                                              <input value="1" name="permission[admin]" type="radio">
                       
                    </td>
                    <td class="col-md-1 permissions-item">
                                                    <input value="-1" name="permission[admin]" type="radio">
                        
                    </td>
                    <td class="col-md-1 permissions-item">
                                                    <input value="0" checked="checked" name="permission[admin]" type="radio">
                                            </td>
                  </tr>
                </tbody>
                                                  <tbody class="permissions-group">
                              <tr class="header-row permissions-row">
                  <td class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="Determines whether the user has the ability to view reports."
                  >
                    <h4>Reports: View</h4>
                  </td>
                  <td class="col-md-1 permissions-item">
                                              <input value="1" name="permission[reports.view]" type="radio">
                       
                    </td>
                    <td class="col-md-1 permissions-item">
                                                    <input value="-1" name="permission[reports.view]" type="radio">
                        
                    </td>
                    <td class="col-md-1 permissions-item">
                                                    <input value="0" checked="checked" name="permission[reports.view]" type="radio">
                                            </td>
                  </tr>
                </tbody>
                                                  <tbody class="permissions-group">
              <tr class="header-row permissions-row">
                <td class="col-md-5 header-name">
                  <h3>Assets</h3>
                </td>
                <td class="col-md-1 permissions-item">
                    <input value="1" name="Assets" type="radio">
                  </td>
                  <td class="col-md-1 permissions-item">
                    <input value="-1" name="Assets" type="radio">
                  </td>
                  <td class="col-md-1 permissions-item">
                    <input value="0" name="Assets" type="radio">
                  </td>
                </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    View 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[assets.view]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[assets.view]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[assets.view]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Create 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[assets.create]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[assets.create]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[assets.create]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Edit  
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[assets.edit]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[assets.edit]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[assets.edit]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Delete 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[assets.delete]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[assets.delete]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[assets.delete]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Checkin 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[assets.checkin]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[assets.checkin]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[assets.checkin]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Checkout 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[assets.checkout]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[assets.checkout]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[assets.checkout]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    View Requestable Assets
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[assets.view.requestable]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[assets.view.requestable]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[assets.view.requestable]" type="radio">
                                      </td>

                              </tr>
                            </tbody>
                                                    <tbody class="permissions-group">
              <tr class="header-row permissions-row">
                <td class="col-md-5 header-name">
                  <h3>Accessories</h3>
                </td>
                <td class="col-md-1 permissions-item">
                    <input value="1" name="Accessories" type="radio">
                  </td>
                  <td class="col-md-1 permissions-item">
                    <input value="-1" name="Accessories" type="radio">
                  </td>
                  <td class="col-md-1 permissions-item">
                    <input value="0" name="Accessories" type="radio">
                  </td>
                </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    View 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[accessories.view]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[accessories.view]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[accessories.view]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Create 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[accessories.create]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[accessories.create]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[accessories.create]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Edit 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[accessories.edit]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[accessories.edit]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[accessories.edit]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Delete 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[accessories.delete]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[accessories.delete]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[accessories.delete]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Checkout 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[accessories.checkout]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[accessories.checkout]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[accessories.checkout]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Checkin 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[accessories.checkin]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[accessories.checkin]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[accessories.checkin]" type="radio">
                                      </td>

                              </tr>
                            </tbody>
                                                    <tbody class="permissions-group">
              <tr class="header-row permissions-row">
                <td class="col-md-5 header-name">
                  <h3>Consumables</h3>
                </td>
                <td class="col-md-1 permissions-item">
                    <input value="1" name="Consumables" type="radio">
                  </td>
                  <td class="col-md-1 permissions-item">
                    <input value="-1" name="Consumables" type="radio">
                  </td>
                  <td class="col-md-1 permissions-item">
                    <input value="0" name="Consumables" type="radio">
                  </td>
                </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    View
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[consumables.view]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[consumables.view]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[consumables.view]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Create 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[consumables.create]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[consumables.create]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[consumables.create]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Edit 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[consumables.edit]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[consumables.edit]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[consumables.edit]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Delete 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[consumables.delete]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[consumables.delete]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[consumables.delete]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Checkout 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[consumables.checkout]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[consumables.checkout]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[consumables.checkout]" type="radio">
                                      </td>

                              </tr>
                            </tbody>
                                                    <tbody class="permissions-group">
              <tr class="header-row permissions-row">
                <td class="col-md-5 header-name">
                  <h3>Licenses</h3>
                </td>
                <td class="col-md-1 permissions-item">
                    <input value="1" name="Licenses" type="radio">
                  </td>
                  <td class="col-md-1 permissions-item">
                    <input value="-1" name="Licenses" type="radio">
                  </td>
                  <td class="col-md-1 permissions-item">
                    <input value="0" name="Licenses" type="radio">
                  </td>
                </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    View
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[licenses.view]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[licenses.view]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[licenses.view]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Create 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[licenses.create]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[licenses.create]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[licenses.create]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Edit 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[licenses.edit]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[licenses.edit]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[licenses.edit]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Delete 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[licenses.delete]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[licenses.delete]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[licenses.delete]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Checkout 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[licenses.checkout]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[licenses.checkout]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[licenses.checkout]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    View License Keys
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[licenses.keys]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[licenses.keys]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[licenses.keys]" type="radio">
                                      </td>

                              </tr>
                            </tbody>
                                                    <tbody class="permissions-group">
              <tr class="header-row permissions-row">
                <td class="col-md-5 header-name">
                  <h3>Components</h3>
                </td>
                <td class="col-md-1 permissions-item">
                    <input value="1" name="Components" type="radio">
                  </td>
                  <td class="col-md-1 permissions-item">
                    <input value="-1" name="Components" type="radio">
                  </td>
                  <td class="col-md-1 permissions-item">
                    <input value="0" name="Components" type="radio">
                  </td>
                </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    View
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[components.view]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[components.view]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[components.view]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Create 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[components.create]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[components.create]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[components.create]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Edit 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[components.edit]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[components.edit]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[components.edit]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Delete 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[components.delete]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[components.delete]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[components.delete]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Checkout 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[components.checkout]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[components.checkout]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[components.checkout]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Checkin 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[components.checkin]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[components.checkin]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[components.checkin]" type="radio">
                                      </td>

                              </tr>
                            </tbody>
                                                    <tbody class="permissions-group">
              <tr class="header-row permissions-row">
                <td class="col-md-5 header-name">
                  <h3>Users</h3>
                </td>
                <td class="col-md-1 permissions-item">
                    <input value="1" name="Users" type="radio">
                  </td>
                  <td class="col-md-1 permissions-item">
                    <input value="-1" name="Users" type="radio">
                  </td>
                  <td class="col-md-1 permissions-item">
                    <input value="0" name="Users" type="radio">
                  </td>
                </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    View 
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[users.view]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[users.view]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[users.view]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Create Users
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[users.create]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[users.create]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[users.create]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Edit Users
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[users.edit]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[users.edit]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[users.edit]" type="radio">
                                      </td>

                              </tr>
                            <tr class="permissions-row">
                                  <td
                    class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title=""
                  >
                    Delete Users
                  </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="1" name="permission[users.delete]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="-1" name="permission[users.delete]" type="radio">
                                      </td>
                  <td class="col-md-1 permissions-item">
                                        <input value="0" checked="checked" name="permission[users.delete]" type="radio">
                                      </td>

                              </tr>
                            </tbody>
                                                    <tbody class="permissions-group">
                              <tr class="header-row permissions-row">
                  <td class="col-md-5 tooltip-base permissions-item"
                    data-toggle="tooltip"
                    data-placement="right"
                    title="The user may disable/enable two-factor authentication themselves if two-factor is enabled and set to selective."
                  >
                    <h4>Self: Two-Factor Authentication</h4>
                  </td>
                  <td class="col-md-1 permissions-item">
                                              <input value="1" name="permission[self.two_factor]" type="radio">
                       
                    </td>
                    <td class="col-md-1 permissions-item">
                                                    <input value="-1" name="permission[self.two_factor]" type="radio">
                        
                    </td>
                    <td class="col-md-1 permissions-item">
                                                    <input value="0" checked="checked" name="permission[self.two_factor]" type="radio">
                                            </td>
                  </tr>
                </tbody>
                                </table>