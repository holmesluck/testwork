<?xml version="1.0" ?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <title>Atoms: Number vs Weight vs Density</title>
            <xsl:apply-templates/>
        </html>
    </xsl:template>

    <xsl:template match="PERIODIC_TABLE">
        <body>
            <h1>Atoms: Number vs Weight vs Density</h1>
            <table border="1">
                <tr>
                    <th>Element</th>
                    <th>Atomic Number</th>
                    <th>Atomic Weight</th>
                    <th>Atomic Density(Unit)</th>
                </tr>
                <xsl:for-each select="ATOM">
                    <tr>
                        <td> <xsl:value-of select="NAME"/></td>
                        <td> <xsl:value-of select="ATOMIC_NUMBER"/></td>
                        <td> <xsl:value-of select="ATOMIC_WEIGHT"/></td>
                        <td><xsl:value-of select="DENSITY "/>(
                            <xsl:value-of select="DENSITY/@UNITS"/>)
                        </td>
                    </tr>
                </xsl:for-each>
            </table>
        </body>
    </xsl:template>
</xsl:stylesheet>