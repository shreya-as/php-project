# selectajax
A jQuery plugin to populate &lt;option&gt; element of html &lt;select&gt; input from ajax datasource.



### Usage

```html
<select id="selectCountry"></select>
```
```javascript
<script src="jquery.js"></script>
<script src="selectajax.js"></script>

$('#selectCountry').getOptions({
    url: "/api/country",
    key: "countryName",
    val: "alpha2Code",
    firstOption: {
        key: "Select Country",
        val: ""
    }
});
```

```url``` returns -

```javascript
[
    {
        countryName: "Bangladesh",
        alpha2Code:"BD"
    },
    {
        countryName: "Bhutan",
        alpha2Code:"BT"
    },
    {
        countryName: "Malaysia",
        alpha2Code:"MY"
    }
    ...        
]
```


Result:

```html
<select id="selectCountry">
    <option value="">Select Country</option>
    <option value="BD">Bangladesh</option>
    <option value="BT">Bhutan</option>
    <option value="MY">Malaysia</option>
    ...
</select>
```




[DEMO](https://jsfiddle.net/anowarcst/y1svpbf8/14/?fbclid=IwAR0SvK7ZOF3DRCm2rYHicG1u952yF-wXdqPrTJyJV5O1E3musDH6fWIaWBQ)
(by [Anowar](https://github.com/AnowarCST))
