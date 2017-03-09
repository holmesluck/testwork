<?xml version="1.0" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">


    <xsl:template match="/">
        <html>
            <head>
                <title>Atoms: Number vs Weight vs Density </title>
            </head>
            <body>
                <xsl:apply-templates/>
            </body>
        </html>
    </xsl:template>

    <xsl:template match="PERIODIC_TABLE">
        <h1>Atoms: Number vs Weight vs Density </h1>
        <table border="1">
            <th>Element</th>
            <th>Atomic Number</th>
            <th>Atomic Weight</th>
            <th>Atomic Density (Unit)</th>
            <xsl:apply-templates/>
        </table>
    </xsl:template>

    <xsl:template match="ATOM">
        <tr>
            <td><xsl:value-of select="NAME"/></td>
            <td><xsl:value-of select="ATOMIC_NUMBER"/></td>
            <td><xsl:value-of select="ATOMIC_WEIGHT"/></td>
            <td><xsl:apply-templates select="DENSITY"/></td>
        </tr>
    </xsl:template>

    <xsl:template match="DENSITY">
        <xsl:value-of select="."/> (
        <xsl:value-of select="@UNITS"/> )
    </xsl:template>

</xsl:stylesheet>
