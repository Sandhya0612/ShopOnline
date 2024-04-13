<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
  <html>
    <body>
      <h2>Auction Report</h2>
      <table>
        <tr>
          <th>Item Number</th>
          <th>Name</th>
          <th>Status</th>
          <th>Final Bid</th>
        </tr>
        <xsl:for-each select="auctions/item">
          <tr>
            <td><xsl:value-of select="@id"/></td>
            <td><xsl:value-of select="name"/></td>
            <td><xsl:value-of select="status"/></td>
            <td><xsl:value-of select="currentBid"/></td>
          </tr>
        </xsl:for-each>
      </table
