@@ -1,14 +1,20 @@
function Footer()
import React from 'react';
class Footer extends React.Component
{
    let a= 2;
    console.log(a);
    return(
    render()
    {

        <footer style={{backgroundColor: "#323232", color:"aliceblue", padding:"25px"}}>
        let a= 2;
        console.log(a);
        return(
            
            <footer style={{backgroundColor: "#323232", color:"aliceblue", padding:"25px"}}>
            smallCamelStyle {a}
            <p>Copyright &#169;</p>
            <p>Copyright &#169; - {this.props.year}</p>
        </footer>
    );
}
}

export default Footer;