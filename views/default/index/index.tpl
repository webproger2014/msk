         <section>
            <h1 class="section-name">События</h1>
            <div class="create-concert">
             <div id="errorNewConcert"></div>
             <input type="text" placeholder="Событие">
             <button>Добавить</button>       
            </div>
              <table class="striped contenttable-del">
                  <thead>
                    <tr>
                        <th data-field="stat-number">ID</th>
                        <th data-field="email">Событие</th>
                    </tr>
                  </thead>
                  <tbody>
                      {foreach $concert as $info}
                    <tr>
                      <td>{$info['id']}</td>
                      <td>{$info['name']}</td>
                      <td><a href="#" name="{$info['id']}" class="del_concert">Удалить</a></td>
                    </tr>
                    {/foreach}
                  </tbody>
            </table>
        </section> 
         <section>
            <h1 class="section-name">Пользователи</h1>
              <table class="striped contenttable-del">
                  <thead>
                    <tr>
                        <th data-field="stat-number">ID</th>
                        <th data-field="email">E-mail</th>
                        <th data-field="datareg">ФИО</th>
                        <th data-field="datareg">телефон</th>
                        <th data-field="datareg">дата рождения</th>
                        <th data-field="datareg">событие</th>
                        <th data-field="datareg">пол</th>
                    </tr>
                  </thead>
                  <tbody>
                      {foreach $user as $info}
                    <tr class="table-accounts">
                      <td>{$info['id']}</td>
                      <td>{$info['email']}</td>
                      <td>{$info['fullname']}</td>
                      <td>{$info['phone']}</td>
                      <td>{$info['dob']}</td>
                      <td>{$info['concert_name']}</td>
                      <td>{$info['gender']}</td>
                      <td><a href="#" class="del_user" name="{$info['id']}">Удалить</a></td>
                    </tr>
                    {/foreach}
                  </tbody>
            </table>
        </section>  
