<!DOCTYPE html>
<html>
<head>
    <title>Display SAP Record</title>
</head>
<body>
    <script>
        var dynamicValue = prompt("Enter SAP order or outbound delivery to display:");

        if (dynamicValue !== null) {
            dynamicValue = dynamicValue.trim(); // Remove leading/trailing spaces
            if (dynamicValue.length === 8 && !isNaN(dynamicValue)) {
                // Assuming 8-digit value is an Outbound Delivery
                window.location.href = "https://vhsibgwplb.hec.sibelco.com/sap/bc/ui2/flp?sap-client=200&sap-language=EN&spnego=disabled#OutboundDelivery-displayInWebGUI?OutboundDelivery=" + dynamicValue;
            } else if (dynamicValue.length === 6 && !isNaN(dynamicValue)) {
                // Assuming 6-digit value is a Sales Order
                window.location.href = "https://vhsibgwplb.hec.sibelco.com/sap/bc/ui2/flp?sap-client=200&sap-language=EN&spnego=disabled#SalesOrder-display?%2524.basicSearch=&SalesOrder=" + dynamicValue;
            } else {
                alert("Invalid input. Please enter an 8-digit Outbound Delivery or a 6-digit Sales Order.");
            }
        }
    </script>
</body>
</html>