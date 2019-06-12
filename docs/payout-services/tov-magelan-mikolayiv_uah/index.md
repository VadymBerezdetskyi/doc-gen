## General 
**Code:** `tov-magelan-mikolayiv_uah`  
**Method:** `tov-magelan-mikolayiv`  
**Currency:** `UAH` [show -->]() 
**Amount limits:** from `2`  to `14999`  UAH ## Fields 
### Overview 
|Key|Required|Type|Regexp| 
|:---:|:---:|:---:|:---:| 
|`client_id` |✔ |`string` |`/^(\w|\.| |\-|\+|@){1,128}$/` | 
 
### Details 
0 **`client_id` **  
Type: `string`  
Regexp: `/^(\w|\.| |\-|\+|@){1,128}$/`  
Required: `1`  
Label:  
: [en] PIB # Rahunku number # Nazva poslugi  
: [uk] ПIБ # Номер Рахунку # Назва послуги  
: [ru] ФИО # Номер счета # Название услуги  
Hint:  
: [en] PIB # Rahunku number # Nazva poslugi  
: [uk] ПIБ # Номер Рахунку # Назва послуги  
: [ru] ФИО # Номер счета # Название услуги  
## JSON Object 
```json
 {"code":"tov-magelan-mikolayiv_uah","method":"tov-magelan-mikolayiv","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"PIB # Rahunku number # Nazva poslugi","uk":"\u041fI\u0411 # \u041d\u043e\u043c\u0435\u0440 \u0420\u0430\u0445\u0443\u043d\u043a\u0443 # \u041d\u0430\u0437\u0432\u0430 \u043f\u043e\u0441\u043b\u0443\u0433\u0438","ru":"\u0424\u0418\u041e # \u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0435\u0442\u0430 # \u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u0443\u0441\u043b\u0443\u0433\u0438"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"PIB # Rahunku number # Nazva poslugi","uk":"\u041fI\u0411 # \u041d\u043e\u043c\u0435\u0440 \u0420\u0430\u0445\u0443\u043d\u043a\u0443 # \u041d\u0430\u0437\u0432\u0430 \u043f\u043e\u0441\u043b\u0443\u0433\u0438","ru":"\u0424\u0418\u041e # \u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0435\u0442\u0430 # \u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u0443\u0441\u043b\u0443\u0433\u0438"},"example":"\u041f\u0435\u0442\u0440\u043e\u0432 \u0410.\u0410.#123154545555#\u0410\u0440\u0435\u043d\u0434\u0430\/\u0420\u0435\u043a\u043b\u0430\u043c\u0430"}],"amount_min":2,"amount_max":14999}```  
