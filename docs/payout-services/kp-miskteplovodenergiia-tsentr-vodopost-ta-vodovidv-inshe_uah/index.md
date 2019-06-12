## General 
**Code:** `kp-miskteplovodenergiia-tsentr-vodopost-ta-vodovidv-inshe_uah`  
**Method:** `kp-miskteplovodenergiia-tsentr-vodopost-ta-vodovidv-inshe`  
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
: [en] Number rakhunku # PIB # Addresses # Nazva poslugi  
: [uk] Номер Рахунку # ПIБ # Адреси # Назва послуги  
: [ru] Номер счета # ФИО # Адрес # Название услуги  
Hint:  
: [en] Number rakhunku # PIB # Addresses # Nazva poslugi  
: [uk] Номер Рахунку # ПIБ # Адреси # Назва послуги  
: [ru] Номер счета # ФИО # Адрес # Название услуги  
## JSON Object 
```json
 {"code":"kp-miskteplovodenergiia-tsentr-vodopost-ta-vodovidv-inshe_uah","method":"kp-miskteplovodenergiia-tsentr-vodopost-ta-vodovidv-inshe","currency":"UAH","fields":[{"key":"client_id","type":"string","label":{"en":"Number rakhunku # PIB # Addresses # Nazva poslugi","uk":"\u041d\u043e\u043c\u0435\u0440 \u0420\u0430\u0445\u0443\u043d\u043a\u0443 # \u041fI\u0411 # \u0410\u0434\u0440\u0435\u0441\u0438 # \u041d\u0430\u0437\u0432\u0430 \u043f\u043e\u0441\u043b\u0443\u0433\u0438","ru":"\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0435\u0442\u0430 # \u0424\u0418\u041e # \u0410\u0434\u0440\u0435\u0441 # \u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u0443\u0441\u043b\u0443\u0433\u0438"},"regexp":"\/^(\\w|\\.| |\\-|\\+|@){1,128}$\/","required":true,"position":1,"hint":{"en":"Number rakhunku # PIB # Addresses # Nazva poslugi","uk":"\u041d\u043e\u043c\u0435\u0440 \u0420\u0430\u0445\u0443\u043d\u043a\u0443 # \u041fI\u0411 # \u0410\u0434\u0440\u0435\u0441\u0438 # \u041d\u0430\u0437\u0432\u0430 \u043f\u043e\u0441\u043b\u0443\u0433\u0438","ru":"\u041d\u043e\u043c\u0435\u0440 \u0441\u0447\u0435\u0442\u0430 # \u0424\u0418\u041e # \u0410\u0434\u0440\u0435\u0441 # \u041d\u0430\u0437\u0432\u0430\u043d\u0438\u0435 \u0443\u0441\u043b\u0443\u0433\u0438"},"example":"1231#\u0416\u0443\u043a \u0410.\u0410.#1 \u041c\u0430\u044f 8 \u043a\u0432. 5#\u0426\u0435\u043d\u0442\u0440. \u0432\u043e\u0434\u043e\u043f\u043e\u0441\u0442."}],"amount_min":2,"amount_max":14999}```  
